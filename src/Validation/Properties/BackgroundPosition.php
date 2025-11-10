<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\ShorthandTypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\BackgroundPositionType;

/**
 * CSS2 Definition:
 * - Value: [ [<percentage> | <length> ]{1,2} | [ [top | center | bottom] || [left | center | right] ] ] | inherit
 * - Initial:   0% 0%
 * - Inherited: no
 * - Percentages:   refer to the size of the box itself
 * - Media: visual
 *
 * If a "background-image" has been specified, this property specifies its initial position.
 *
 * Values:
 * - `<percentage> <percentage>` : With a value pair of 0% 0%, the upper left corner of the image is aligned
 *   with the upper left corner of the box's padding edge. A value pair of 100% 100% places the lower right
 *   corner of the image in the lower right corner of padding area. With a value pair of 14% 84%, the point
 *   14% across and 84% down the image is to be placed at the point 14% across and 84% down the padding area.
 * - `<length> <length>` : With a value pair of 2cm 2cm, the upper left corner of the image is placed 2cm to
 *   the right and 2cm below the upper left corner of the padding area.
 * - `top left` and `left top` : Same as 0% 0%.
 * - `top`, `top center`, and `center top` : Same as 50% 0%.
 * - `right top` and `top right` : Same as 100% 0%.
 * - `left`, `left center`, and `center left` : Same as 0% 50%.
 * - `center` and `center center` : Same as 50% 50%.
 * - `right`, `right center`, and `center right` : Same as 100% 50%.
 * - `bottom left` and `left bottom` : Same as 0% 100%.
 * - `bottom`, `bottom center`, and `center bottom` : Same as 50% 100%.
 * - `bottom right` and `right bottom` : Same as 100% 100%.
 *
 * If only one percentage or length value is given, it sets the horizontal position only, the vertical
 * position will be 50%. If two values are given, the horizontal position comes first. Combinations of
 * length and percentage values are allowed, (e.g., 50% 2cm). Negative positions are allowed. Keywords
 * cannot be combined with percentage values or length values (all possible combinations are given above).
 * If the background image is fixed within the viewport (see the "background-attachment" property), the
 * image is placed relative to the viewport instead of the elements padding area.
 *
 * XSL modifications to the CSS definition:
 * The CSS property shall be treated as a shorthand by XSL and maps as follows:
 *
 * `<percentage>`:
 * - `background-position-horizontal="<percentage>"`
 * - `background-position-vertical="50%"`
 *
 * `<percentage1> <percentage2>`:
 * - `background-position-horizontal="<percentage1>"`
 * - `background-position-vertical="<percentage2>"`
 *
 * `<length>`:
 * - `background-position-horizontal="<length>"`
 * - `background-position-vertical="50%"`
 *
 * `<length1> <length2>`:
 * - `background-position-horizontal="<length1>"`
 * - `background-position-vertical="<length2>"`
 *
 * `<length> <percentage>`:
 * - `background-position-horizontal="<length>"`
 * - `background-position-vertical="<percentage>"`
 *
 * `<percentage> <length>`:
 * - `background-position-horizontal="<percentage>"`
 * - `background-position-vertical="<length>"`
 *
 * `top left` and `left top`:
 * - `background-position-horizontal="0%"`
 * - `background-position-vertical="0%"`
 *
 * `top`, `top center`, and `center top`:
 * - `background-position-horizontal="50%"`
 * - `background-position-vertical="0%"`
 *
 * `right top` and `top right`:
 * - `background-position-horizontal="100%"`
 * - `background-position-vertical="0%"`
 *
 * `left`, `left center`, and `center left`:
 * - `background-position-horizontal="0%"`
 * - `background-position-vertical="50%"`
 *
 * `center` and `center center`:
 * - `background-position-horizontal="50%"`
 * - `background-position-vertical="50%"`
 *
 * `right`, `right center`, and `center right`:
 * - `background-position-horizontal="100%"`
 * - `background-position-vertical="50%"`
 *
 * `bottom left` and `left bottom`:
 * - `background-position-horizontal="0%"`
 * - `background-position-vertical="100%"`
 *
 * `bottom`, `bottom center`, and `center bottom`:
 * - `background-position-horizontal="50%"`
 * - `background-position-vertical="100%"`
 *
 * `bottom right` and `right bottom`:
 * - `background-position-horizontal="100%"`
 * - `background-position-vertical="100%"`
 *
 * @link https://www.w3.org/TR/xsl11/#background-position
 * @link http://www.w3.org/TR/REC-CSS2/colors.html#propdef-background-position
 */
class BackgroundPosition extends ShorthandTypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct(
            'background-position',
            BackgroundPositionType::class,
            [
                BackgroundPositionHorizontal::class,
                BackgroundPositionVertical::class,
            ]
        );
    }

    public function getDefaultValue(): string
    {
        return '0% 0%';
    }
}
