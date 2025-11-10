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
 * The "number-columns-repeated" property specifies the repetition of a table-column specification n times;
 * with the same effect as if the fo:table-column formatting object had been repeated n times in the result
 * tree. The "column-number" property, for all but the first, is the column-number of the previous one plus
 * its value of the "number-columns-spanned" property.
 *
 * If a non-positive or non-integer value is provided, the value will be rounded to the nearest integer value
 * greater than or equal to 1.
 *
 * Note:
 * This handles HTML's "colgroup" element.
 *
 * @link https://www.w3.org/TR/xsl11/#number-columns-repeated
 */
class NumberColumnsRepeated extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('number-columns-repeated', NumberType::class);
    }

    public function getDefaultValue(): string
    {
        return '1';
    }
}
