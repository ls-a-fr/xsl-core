<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tokenizer\Functions\Number;

use Lsa\Xsl\Core\Exceptions\InvalidAttributeValueParseException;
use Lsa\Xsl\Core\Tags\Table\Table;
use Lsa\Xsl\Core\Tags\Table\TableColumn;
use Lsa\Xsl\Core\Tokenizer\Functions\XslFunction;
use Lsa\Xsl\Core\Traits\DataAwareFunction;
use Lsa\Xsl\Core\Validation\Properties\TableLayout;
use Lsa\Xsl\Core\Validation\Types\Functions\ProportionalColumnWidthType;
use Lsa\Xsl\Core\Validation\Types\TableLayoutType;

/**
 * The proportional-column-width function returns N units of proportional measure where N is the argument
 * given to this function. The column widths are first determined ignoring the proportional measures. The
 * difference between the table-width and the sum of the column widths is the available proportional width.
 * One unit of proportional measure is the available proportional width divided by the sum of the proportional
 * factors. It is an error to use this function on formatting objects other than an fo:table-column. It is
 * also an error to use this function if the fixed table layout is not used.
 *
 * Signature:
 * - `numeric proportional-column-width(numeric)`
 */
class ProportionalColumnWidthFunction extends XslFunction
{
    use DataAwareFunction;

    public static function getFunctionName(): string
    {
        return 'proportional-column-width';
    }

    /**
     * Gets this function parameters
     *
     * @return list<array<self::MODE_*,self::TYPE_*>>
     */
    public static function getParameters(): array
    {
        return [
            [self::MODE_REQUIRED => self::TYPE_NUMERIC],
        ];
    }

    public function evaluate(...$args): string|float
    {
        if (\is_string($args[0]) === true) {
            $columnWidth = trim($args[0]);
        } else {
            $columnWidth = $args[0];
        }
        if ((new ProportionalColumnWidthType())->validate($this->getFunctionName().'('.$columnWidth.')') === false) {
            throw new InvalidAttributeValueParseException(
                'Invalid argument for proportional-column-width, got: '.$columnWidth
            );
        }

        $tag = $this->getRootToken()->tag;
        if (($tag instanceof TableColumn) === false) {
            throw new InvalidAttributeValueParseException(
                'Cannot use proportional-column-width outside of fo:table-column tag'
            );
        }

        $table = $tag->ancestor(Table::class);
        if ($table === null) {
            throw new InvalidAttributeValueParseException(
                'Cannot find parent Table node in proportional-column-width'
            );
        }
        $tableLayoutDefaultValue = (new TableLayout())->getDefaultValue();
        if ($table->attributes->get('table-layout', $tableLayoutDefaultValue) !== TableLayoutType::FIXED) {
            throw new InvalidAttributeValueParseException(
                'Cannot use proportional-column-width without table-layout fixed'
            );
        }

        return 'proportional-column-width('.$columnWidth.')';
    }
}
