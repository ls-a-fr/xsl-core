<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\ShorthandTypedAttribute;
use Lsa\Xsl\Core\Validation\Types\MarginType;

/**
 * CSS2 Definition:
 * Value: <margin-width>{1,4} | inherit
 * Initial: not defined for shorthand properties
 * Inherited: no
 * Percentages: refer to width of containing block
 * Media: visual
 *
 * CSS2 Reference: "margin" property
 *
 * A shorthand property for setting margin-top, margin-right, margin-bottom, and margin-left of a block-area or
 * inline-area.
 * If there is only one value, it applies to all sides. If there are two values, the top and bottom margins are
 * set to the first value and the right and left margins are set to the second. If there are three values, the
 * top is set to the first value, the left and right are set to the second, and the bottom is set to the third.
 * If there are four values, they apply to the top, right, bottom, and left, respectively.
 *
 * XSL modifications to the CSS definition:
 *     - Margin is provided for compatibility with CSS.
 *     - Details on the mapping of CSS "margin" properties for XSL are given in 5 Property Refinement / Resolution.
 *
 * @link https://www.w3.org/TR/xsl11/#refinement
 * @link http://www.w3.org/TR/REC-CSS2/box.html#propdef-margin
 */
class Margin extends ShorthandTypedAttribute
{
    public function __construct()
    {
        parent::__construct(
            'margin',
            MarginType::class,
            [
                MarginTop::class,
                MarginBottom::class,
                MarginLeft::class,
                MarginRight::class,
            ]
        );
    }
}
