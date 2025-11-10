<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\ShorthandTypedAttribute;
use Lsa\Xsl\Core\Validation\Types\PaddingType;

/**
 * CSS2 Definition:
 * - Value:  `<padding-width>{1,4}` | inherit
 * - Initial:  not defined for shorthand properties
 * - Inherited:  no
 * - Percentages:  refer to width of containing block
 * - Media:  visual
 *
 * A shorthand property for setting padding-top, padding-bottom, padding-left, and padding-right of a
 * block-area or inline-area.
 * If there is only one value, it applies to all sides. If there are two values, the top and bottom paddings
 * are set to the first value and the right and left paddings are set to the second. If there are three
 * values, the top is set to the first value, the left and right are set to the second, and the bottom is
 * set to the third. If there are four values, they apply to the top, right, bottom, and left, respectively.
 * The surface color or image of the padding area is specified via the "background" property.
 *
 * Contains:
 * - padding-before
 * - padding-after
 * - padding-start
 * - padding-end
 * - padding-top
 * - padding-bottom
 * - padding-left
 * - padding-right
 *
 * Some properties have more than one way in which the property value can be specified. The simplest example
 * of such properties are those which can be specified either in terms of a direction relative to the
 * writing-mode (e.g., padding-before) or a direction in terms of the absolute geometric orientation of the
 * viewport (e.g., padding-top). These two properties are called the relative property and the absolute
 * property, respectively. Collectively, they are called "corresponding properties".
 * Specifying a value for one property determines both a computed value for the specified property and a
 * computed value for the corresponding property. Which relative property corresponds to which absolute
 * property depends on the writing-mode. For example, if the "writing-mode" at the top level of a document
 * is "lr-tb", then "padding-start" corresponds to "padding-left", but if the "writing-mode" is "rl-tb",
 * then "padding-start" corresponds to "padding-right". The exact specification of how to compute the values
 * of corresponding properties is given in 5.3 Computing the Values of Corresponding Properties.
 *
 * Where there are corresponding properties, such as "padding-left" and "padding-start", a computed value is
 * determined for all the corresponding properties. How the computed values are determined for a given
 * formatting object is dependent on which of the corresponding properties are specified on the object. See
 * description below.
 *
 * The correspondence mapping from absolute to relative property is as follows:
 * - If the "writing-mode" specifies a block-progression-direction of "top-to-bottom": "top" maps to "before",
 * and "bottom" maps to "after".
 * - If the "writing-mode" specifies a block-progression-direction of "bottom-to-top": "top" maps to "after",
 * and "bottom" maps to "before".
 * - If the "writing-mode" specifies a block-progression-direction of "left-to-right": "left" maps to "before",
 * and "right" maps to "after".
 * - If the "writing-mode" specifies a block-progression-direction of "right-to-left": "left" maps to "after",
 * and "right" maps to "before".
 * - If the "writing-mode" specifies an inline-progression-direction of "left-to-right": "left" maps to "start",
 * and "right" maps to "end".
 * - If the "writing-mode" specifies an inline-progression-direction of "right-to-left": "left" maps to "end",
 * and "right" maps to "start".
 * - If the "writing-mode" specifies an inline-progression-direction of "top-to-bottom": "top" maps to "start",
 * and "bottom" maps to "end".
 * - If the "writing-mode" specifies an inline-progression-direction of "bottom-to-top": "top" maps to "end",
 * and "bottom" maps to "start".
 * - If the "writing-mode" specifies an inline-progression-direction of "left-to-right" for odd-numbered lines,
 * and "right-to-left" for even-numbered lines: "left" maps to "start", and "right" maps to "end".
 *
 * Note: "reference-orientation" is a rotation and does not influence the correspondence mapping.
 *
 * @link https://www.w3.org/TR/xsl11/#padding
 * @link http://www.w3.org/TR/REC-CSS2/box.html#propdef-padding
 * @link https://www.w3.org/TR/xsl11/#compcorr
 */
class Padding extends ShorthandTypedAttribute
{
    public function __construct()
    {
        parent::__construct(
            'padding',
            PaddingType::class,
            [
                PaddingBefore::class,
                PaddingAfter::class,
                PaddingStart::class,
                PaddingEnd::class,
                PaddingTop::class,
                PaddingBottom::class,
                PaddingLeft::class,
                PaddingRight::class,
            ]
        );
    }
}
