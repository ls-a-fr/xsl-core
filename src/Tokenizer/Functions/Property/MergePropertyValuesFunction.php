<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tokenizer\Functions\Property;

use Lsa\Xml\Utils\Exceptions\PropertyNotFoundException;
use Lsa\Xml\Utils\Validation\PropertyBank;
use Lsa\Xsl\Core\Exceptions\InvalidAttributeValueParseException;
use Lsa\Xsl\Core\Tags\Multi\MultiProperties;
use Lsa\Xsl\Core\Tags\Other\Wrapper;
use Lsa\Xsl\Core\Tokenizer\Functions\XslFunction;
use Lsa\Xsl\Core\Traits\DataAwareFunction;

/**
 * The merge-property-values function returns a value of the property whose name matches the argument, or if
 * omitted for the property for which the expression is being evaluated. The value returned is the specified
 * value on the last fo:multi-property-set, of the parent fo:multi-properties, that applies to the User Agent
 * state. If there is no such value, the computed value of the parent fo:multi-properties is returned. If the
 * argument specifies a shorthand property and if the expression only consists of the merge-property-values
 * function with an argument matching the property being computed, it is interpreted as an expansion of the
 * shorthand with each property into which the shorthand expands, each having a value of merge-property-values
 * with an argument matching the property. It is an error if arguments matching a shorthand property are used
 * in any other way. Similarly, if the argument specifies a property of a compound datatype and if the
 * expression only consists of the merge-property-values function with an argument matching the property being
 * computed, it is interpreted as an expansion with each component of the compound property having a value of
 * merge-property-values with an argument matching the component. It is an error if arguments matching a
 * property of a compound datatype are used in any other way.
 *
 * Note:
 * The test for applicability of a User Agent state is specified using the "active-state" property.
 *
 * It is an error to use this function on formatting objects other than an fo:wrapper that is the child of an
 * fo:multi-properties.
 *
 * Signature:
 * - `object merge-property-values(NCName?)`
 *
 * @see https://www.w3.org/TR/xsl11/#provisional-label-separation
 */
class MergePropertyValuesFunction extends XslFunction
{
    use DataAwareFunction;

    public static function getFunctionName(): string
    {
        return 'merge-property-values';
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
        $tag = $rootToken->tag;
        $propertyName = ($args[0] ?? $rootToken->attribute->name);

        if (\is_float($propertyName) === true) {
            throw new InvalidAttributeValueParseException(
                self::getFunctionName().'() expects string, float given'
            );
        }

        try {
            $property = PropertyBank::getOne($propertyName);
        } catch (PropertyNotFoundException) {
            throw new InvalidAttributeValueParseException('Property '.$propertyName.' does not exist');
        }

        // It is an error to use this function on formatting objects other than an fo:wrapper that is the
        // child of an fo:multi-properties.
        if (($tag instanceof Wrapper) === false) {
            throw new InvalidAttributeValueParseException(
                'Cannot use merge-property-values except on a fo:wrapper'
            );
        }
        if (($tag->parent() instanceof MultiProperties) === false) {
            throw new InvalidAttributeValueParseException(
                'Cannot use merge-property-values except on a fo:wrapper child of multi-properties'
            );
        }

        // This module has no User-Agent set, so no need to check active-state
        return 'merge-property-values('.($args[0] ?? '').')';
    }
}
