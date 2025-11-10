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
 * The "number-rows-spanned" property specifies the number of rows which this cell spans in the
 * row-progression-direction starting with the current row.
 *
 * If a non-positive or non-integer value is provided, the value will be rounded to the nearest integer value
 * greater than or equal to 1.
 *
 * @link https://www.w3.org/TR/xsl11/#number-columns-repeated
 */
class NumberRowsSpanned extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('number-rows-spanned', NumberType::class);
    }

    public function getDefaultValue(): string
    {
        return '1';
    }
}
