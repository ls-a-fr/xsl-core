<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\TextShadowType;

/**
 * CSS2 Definition:
 * - Value:  none | [`<color>` || `<length>` `<length>` `<length>`? ,]* [`<color>`
 *     || `<length>` `<length>` `<length>`?] | inherit
 * - Initial:  none
 * - Inherited:  no, see prose
 * - Percentages:  N/A
 * - Media:  visual
 *
 * This property accepts a comma-separated list of shadow effects to be applied to the text of the
 * element. The shadow effects are applied in the order specified and may thus overlay each other,
 * but they will never overlay the text itself. Shadow effects do not alter the size of a box, but
 * may extend beyond its boundaries. The stack level of the shadow effects is the same as for the
 * element itself.
 *
 * Each shadow effect must specify a shadow offset and may optionally specify a blur radius and a
 * shadow color.
 *
 * A shadow offset is specified with two "length" values that indicate the distance from the text.
 * The first length value specifies the horizontal distance to the right of the text. A negative
 * horizontal length value places the shadow to the left of the text. The second length value
 * specifies the vertical distance below the text. A negative vertical length value places the
 * shadow above the text.
 *
 * A blur radius may optionally be specified after the shadow offset. The blur radius is a length
 * value that indicates the boundaries of the blur effect. The exact algorithm for computing the
 * blur effect is not specified.
 *
 * A color value may optionally be specified before or after the length values of the shadow effect.
 * The color value will be used as the basis for the shadow effect. If no color is specified, the
 * value of the "color" property will be used instead.
 *
 * XSL modifications to the CSS definition:
 * The "text-shadow" property is not inherited, it is converted into a rendering trait. This
 * rendering trait specifies that a rendering effect is to be applied, collectively, to the glyph
 * images within the area forest returned by the children of the formatting object on which the
 * property is specified. That is, for any given glyph area, the glyph image, the marked portion of
 * that area not including background, is copied, shifted by the shadow offset, then colored and
 * blurred (if so specified) and rendered after any background is rendered and prior to rendering
 * the glyph image itself. The shadow is colored with the color that will be used to color the glyph
 * image itself if no color is specified as part of the shadow effect and with the specified color
 * if a color is specified as part of the shadow effect. If more than one shadow effect is specified
 * that last specified effect is rendered first and preceding effects are rendered in the reverse of
 * the order in which they were specified in the list of shadow effects.
 *
 * Note: Since the entire forest of normal areas returned by the formatting object on which the
 * property applies is affected by the rendering effect it appears that the shadow effect is
 * inherited. Inheritance would not work however, because that would not allow all the images of one
 * shadow effect to be rendered prior to all the glyph images or images or shadow effect specified
 * before the given shadow effect.
 *
 * @link https://www.w3.org/TR/xsl11/#text-shadow
 * @link http://www.w3.org/TR/REC-CSS2/text.html#propdef-text-shadow
 */
class TextShadow extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('text-shadow', TextShadowType::class);
    }

    public function getDefaultValue(): string
    {
        return TextShadowType::NONE;
    }
}
