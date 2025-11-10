<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\ShorthandTypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\BorderMultiWidthType;

/**
 * CSS2 Definition:
 * - Value: `<border-width>{1,4}` | inherit
 * - Initial: see individual properties
 * - Inherited: no
 * - Percentages: N/A
 * - Media: visual
 *
 * This property is a shorthand property for setting "border-top-width", "border-right-width",
 * "border-bottom-width", and "border-left-width" at the same place in the stylesheet.
 *
 * If there is only one value, it applies to all sides. If there are two values, the top and bottom borders
 * are set to the first value and the right and left are set to the second. If there are three values, the
 * top is set to the first value, the left and right are set to the second, and the bottom is set to the third.
 * If there are four values, they apply to the top, right, bottom, and left, respectively.
 *
 * @link https://www.w3.org/TR/xsl11/#border-width
 * @link http://www.w3.org/TR/REC-CSS2/box.html#propdef-border-width
 */
class BorderWidth extends ShorthandTypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct(
            'border-width',
            BorderMultiWidthType::class,
            [
                BorderBottomWidth::class,
                BorderLeftWidth::class,
                BorderRightWidth::class,
                BorderTopWidth::class,
            ]
        );
    }

    public function getDefaultValue(): string
    {
        return (new BorderBottomWidth())->getDefaultValue();
    }
}
