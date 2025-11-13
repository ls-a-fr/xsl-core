<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tokenizer\Functions\Property;

use Lsa\Xml\Utils\Collections\NodeCollection;
use Lsa\Xml\Utils\Exceptions\PropertyNotFoundException;
use Lsa\Xml\Utils\Validation\PropertyBank;
use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xml\Utils\Xml\Base\EmptyTag;
use Lsa\Xml\Utils\Xml\Base\Tag;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Contracts\HasDefaultValueWithContext;
use Lsa\Xsl\Core\Exceptions\InvalidAttributeValueParseException;
use Lsa\Xsl\Core\Tags\Table\Table;
use Lsa\Xsl\Core\Tags\Table\TableCell;
use Lsa\Xsl\Core\Tags\Table\TableColumn;
use Lsa\Xsl\Core\Tokenizer\Functions\XslFunction;
use Lsa\Xsl\Core\Traits\DataAwareFunction;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Properties\ColumnNumber;
use Lsa\Xsl\Core\Validation\Properties\NumberColumnsSpanned;

/**
 * The from-table-column function returns the inherited value of the property whose name matches the argument
 * specified, or if omitted for the property for which the expression is being evaluated, from the
 * fo:table-column whose column-number matches the column for which this expression is evaluated and whose
 * number-columns-spanned also matches any span. If there is no match for the number-columns-spanned, it is
 * matched against a span of 1. If there is still no match, the initial value is returned. If the argument
 * specifies a shorthand property and if the expression only consists of the from-table-column function with
 * an argument matching the property being computed, it is interpreted as an expansion of the shorthand with
 * each property into which the shorthand expands, each having a value of from-table-column with an argument
 * matching the property. It is an error if arguments matching a shorthand property are used in any other way.
 * Similarly, if the argument specifies a property of a compound datatype and if the expression only consists
 * of the from-table-column function with an argument matching the property being computed, it is interpreted
 * as an expansion with each component of the compound property having a value of from-table-column with an
 * argument matching the component. It is an error if arguments matching a property of a compound datatype
 * are used in any other way. It is also an error to use this function on formatting objects that are not an
 * fo:table-cell or its descendants.
 *
 * Signature:
 * - `object from-table-column(NCName?)`
 *
 * @see https://www.w3.org/TR/xsl11/#speccomact
 */
class FromTableColumnFunction extends XslFunction
{
    use DataAwareFunction;

    public static function getFunctionName(): string
    {
        return 'from-table-column';
    }

    /**
     * Gets this function parameters
     *
     * @return list<array<self::MODE_*,self::TYPE_*>>
     */
    public static function getParameters(): array
    {
        return [
            [self::MODE_OPTIONAL => self::TYPE_NC_NAME],
        ];
    }

    public function evaluate(...$args): string|float
    {
        $rootToken = $this->getRootToken();
        $propertyName = ($args[0] ?? $rootToken->attribute->name);
        $currentTag = $rootToken->tag;
        $tableCell = $this->findTableCell($currentTag);

        if (\is_float($propertyName) === true) {
            throw new InvalidAttributeValueParseException(
                self::getFunctionName().'() expects string, float given'
            );
        }

        try {
            $property = PropertyBank::getOne($propertyName);
        } catch (PropertyNotFoundException) {
            throw new InvalidAttributeValueParseException('Property '.$propertyName.' not found');
        }

        $table = $tableCell->ancestor(Table::class);
        if ($table === null) {
            throw new InvalidAttributeValueParseException('Cannot fetch fo:table from this table-cell');
        }

        [$columns, $cellColumnNumber, $cellColumnSpan] = $this->getColumnInfo($table, $tableCell);

        foreach ($columns as $column) {
            if (($column instanceof EmptyTag) === false) {
                continue;
            }
            $currentColumnNumber = $this->getCurrentColumnNumber($column, $table, $tableCell);
            if ($currentColumnNumber !== $cellColumnNumber) {
                continue;
            }
            if ($column->attributes->get('number-columns-spanned', '1') !== $cellColumnSpan) {
                continue;
            }
            if ($column->attributes->get($propertyName) !== null) {
                return $column->attributes->get($propertyName);
            }

            return $this->fromProperty($property, $currentTag);
        }
        throw new InvalidAttributeValueParseException('Cannot find related TableColumn.');
    }

    /**
     * Utility method to get current column number.
     *
     * @param  EmptyTag  $column  Current column
     * @param  Tag  $table  Table tag
     * @param  EmptyTag  $tableCell  Current table cell
     * @return string Current column number, or default value
     */
    protected function getCurrentColumnNumber(EmptyTag $column, Tag $table, EmptyTag $tableCell): string
    {
        $currentColumnNumber = $column->attributes->get('column-number');
        if ($currentColumnNumber === null) {
            $currentColumnNumber = (new ColumnNumber())->getDefaultValueWithContext($table, $tableCell);
        }

        return $currentColumnNumber;
    }

    /**
     * Utility method to find parent table-cell element.
     *
     * @param  EmptyTag  $currentTag  Current tag
     *
     * @throws InvalidAttributeValueParseException
     */
    protected function findTableCell(EmptyTag $currentTag): EmptyTag
    {
        // It is also an error to use this function on formatting objects that are not an fo:table-cell or
        // its descendants.
        if ($currentTag->getTagName() === 'table-cell') {
            $tableCell = $currentTag;
        } else {
            $tableCell = $currentTag->ancestor(TableCell::class);
            if ($tableCell === null) {
                throw new InvalidAttributeValueParseException(
                    'Cannot use from-table-column outside of fo:table-cell or any of its descendants'
                );
            }
        }

        return $tableCell;
    }

    /**
     * Utility method to gather column info
     *
     * @param  Tag  $table  Table element
     * @param  EmptyTag  $tableCell  Table cell element
     * @return array{0:NodeCollection, 1:numeric-string, 2:numeric-string}
     */
    protected function getColumnInfo(Tag $table, EmptyTag $tableCell): array
    {
        $columns = $table->getChildren()->filter(fn ($t) => $t instanceof TableColumn);

        $cellColumnNumber = $tableCell->attributes->get(
            'column-number',
            (new ColumnNumber())->getDefaultValueWithContext($table, $tableCell)
        );
        assert(\is_numeric($cellColumnNumber));

        $cellColumnSpan = $tableCell->attributes->get(
            'number-columns-spanned',
            (new NumberColumnsSpanned())->getDefaultValue()
        );
        assert(\is_numeric($cellColumnSpan));

        return [$columns, $cellColumnNumber, $cellColumnSpan];
    }

    /**
     * Utility method to fetch a value from a property, inside FromTableColumnFunction context.
     *
     * @param  TypedAttribute  $property  Associated property
     * @param  EmptyTag  $currentTag  Node to search on
     * @return string Attribute value
     *
     * @throws InvalidAttributeValueParseException
     */
    protected function fromProperty(TypedAttribute $property, EmptyTag $currentTag): string
    {
        /**
         * Sorry PHPStan, but class_uses can also return false on error
         *
         * @var array<string,class-string>|false $classesUsed
         */
        $classesUsed = \class_uses($property);
        if ($classesUsed !== false && \in_array(InheritableAttribute::class, $classesUsed) === true) {
            /**
             * Then property implements InheritableAttribute trait.
             *
             * @var InheritableAttribute $property
             *
             * @phpstan-ignore class.notFound, varTag.trait, varTag.nativeType
             */
            return $property->getValue($currentTag);
        }
        $interfaces = \class_implements($property);
        if (in_array(HasDefaultValue::class, $interfaces) === true) {
            assert($property instanceof HasDefaultValue);

            return $property->getDefaultValue();
        }
        if (\in_array(HasDefaultValueWithContext::class, $interfaces) === true) {
            assert($property instanceof HasDefaultValueWithContext);

            return $property->getDefaultValueWithContext($currentTag->root(), $currentTag);
        }
        throw new InvalidAttributeValueParseException(
            'Property '.$property->name.' has no default value and was not found on parent row'
        );
    }
}
