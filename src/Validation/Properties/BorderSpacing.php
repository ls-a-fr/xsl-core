<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\ShorthandTypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\BorderSpacingType;

/**
 * CSS2 Definition:
 * - Value:   `<length>` `<length>?` | inherit
 * - Initial:     0pt
 * - Inherited:   yes
 * - Percentages:     N/A
 * - Media:   visual
 *
 * In the separate borders model, each cell has an individual border. The
 * "border-spacing" property specifies the distance between the borders of adjacent
 * cells. This space is filled with the background of the table element. Rows, columns,
 * row groups, and column groups cannot have borders (i.e., user agents must ignore the
 * border properties for those elements).
 *
 * XSL modifications to the CSS definition:
 * - The CSS property shall be treated as a shorthand by XSL and maps as follows:
 * - If one value is specified the "border-separation.block-progression-direction" and
 *   "border-separation.inline-progression-direction" are both set to that value.
 * - If two values are specified the "border-separation.block-progression-direction" is
 *   set to the second value and "border-separation.inline-progression-direction" is set to
 *   the first value.
 *
 * @link http://www.w3.org/TR/REC-CSS2/tables.html#propdef-border-spacing
 * @link https://www.w3.org/TR/xsl11/#border-spacing
 */
class BorderSpacing extends ShorthandTypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct(
            'border-spacing',
            BorderSpacingType::class,
            [
                BorderSeparation::class,
            ]
        );
    }

    public function getDefaultValue(): string
    {
        return '0pt';
    }
}
