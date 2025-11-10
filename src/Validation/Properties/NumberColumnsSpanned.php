<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\Xsl\NumberType;

/**
 * XSL Definition:
 * - Value:  `<number>`
 * Initial:  1
 * Inherited:  no
 * Percentages:  N/A
 * Media:  visual
 *
 * For an fo:table-column the "number-columns-spanned" property specifies the number of columns spanned by
 * table-cells that may use properties from this fo:table-column formatting object using the
 * from-table-column() function.
 *
 * For an fo:table-cell the "number-columns-spanned" property specifies the number of columns which this cell
 * spans in the column-progression-direction starting with the current column.
 *
 * If a non-positive or non-integer value is provided, the value will be rounded to the nearest integer value
 * greater than or equal to 1.
 *
 * @link https://www.w3.org/TR/xsl11/#number-columns-repeated
 */
class NumberColumnsSpanned extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('number-columns-spanned', NumberType::class);
    }

    public function getDefaultValue(): string
    {
        return '1';
    }
}
