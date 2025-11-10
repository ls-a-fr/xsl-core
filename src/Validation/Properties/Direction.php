<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\DirectionType;

/**
 * CSS2 Definition:
 * - Value:  ltr | rtl | inherit
 * - Initial:  ltr
 * - Inherited:  yes
 * - Percentages:  N/A
 * - Media:  visual
 *
 * This property specifies the base writing direction of blocks and the direction of embeddings and
 * overrides (see [UNICODE UAX #9]) for the Unicode BIDI algorithm. In addition, it specifies the
 * direction of table column layout, the direction of horizontal overflow, and the position of an
 * incomplete last line in a block in case of 'text-align: justify'.
 *
 * For the 'direction' property to have any effect on inline-level elements, the 'unicode-bidi'
 * property's value must be 'embed' or 'override'.
 *
 * Note: The 'direction' property, when specified for table column elements, is not inherited by cells
 * in the column since columns don't exist in the document tree. Thus, CSS cannot easily capture the
 * "dir" attribute inheritance rules described in [HTML40], section 11.3.2.1.
 *
 * XSL modifications to the CSS definition:
 * - The specific use of "direction" and "unicode-bidi" on inline objects is to set the
 * inline-progression-direction to be used by the Unicode BIDI algorithm. This direction may override the
 * inline-progression-direction determined by the current writing-mode and the implicit direction
 * determined by the Unicode BIDI algorithm.
 * - To insure consistency with the "writing-mode" property, the "direction" property is initialized to
 * the value that sets the same inline-progression-direction as is set by the "writing-mode" property
 * whenever that "writing-mode" property sets that direction. If the "direction" property is explicitly
 * specified on the same formatting object the value of the "direction" property will override the
 * inline-progression-direction set by the "writing-mode".
 * - This property only has an effect on text in which the orientation of the glyphs is perpendicular to
 * the inline-progression-direction. Therefore, vertical ideographic text with the initial value for
 * "glyph-orientation-vertical" is not affected by this property; vertical text for which the
 * "glyph-orientation-vertical" property has the value of "90" or "-90" degrees is affected.
 *
 *      Note: When the inline-progression-direction is "tb", as is typical for vertical text, then this
 *      corresponds to a "lr" inline-progression-direction for text with a glyph-orientation of '90'
 *      degrees and an "rl" inline-progression-direction for text with a glyph-orientation of "-90" degrees.
 *
 * - The "writing-mode" property establishes both the block-progression-direction and the
 * inline-progression-direction. The "direction" property only changes the inline-progression-direction and
 * is used primarily for formatting objects that generate inline-areas that are not also reference areas.
 * Use of the "direction" property for other formatting objects is deprecated in this specification.
 *
 * When mapping CSS to XSL, the XSL "writing-mode" property should be used rather than the "direction"
 * property for all block-level directionality control. XSL's "writing-mode" should also be used for any
 * inline-container or block-container objects. The "direction" property should be used only for
 * control/overrides of the Unicode BIDI algorithm on bidi-override formatting objects.
 *
 * Implementations must support the values of the "direction" values defined in this Recommendation that
 * are required to support the "writing-mode" values supported by the implementation.
 *
 * @link https://www.w3.org/TR/xsl11/#direction
 * @link http://www.w3.org/TR/REC-CSS2/visuren.html#propdef-direction
 * @link https://www.w3.org/TR/xsl11/#UNICODE-TR9
 */
class Direction extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('direction', DirectionType::class);
    }

    public function getDefaultValue(): string
    {
        return DirectionType::LTR;
    }
}
