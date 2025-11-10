<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\GlyphOrientationHorizontalType;

/**
 * XSL Definition:
 * - Value:  `<angle>` | inherit
 * - Initial:  0deg
 * - Inherited:  yes
 * - Percentages:  N/A
 * - Media:  visual
 *
 * This property specifies the orientation of glyphs relative to the path direction specified by the
 * 'writing-mode'. This property is applied only to text written in a horizontal writing-mode.
 *
 * The value of this property affects both the alignment and width of the glyph-areas generated for
 * the affected glyphs. If a glyph is oriented so that it is not perpendicular to the
 * dominant-baseline, then the vertical alignment-point of the rotated glyph is aligned with the
 * alignment-baseline appropriate to that glyph. The baseline to which the rotated glyph is aligned
 * is the (horizontal) baseline identified by the "alignment-baseline" for the script to which the
 * glyph belongs. The width of the glyph-area is determined from the vertical width font characteristic
 * for the glyph.
 *
 * The angle is restricted to 0, 90, 180, and 270 degrees. The User Agent shall round the value of the
 * angle to the closest of the permitted values.
 *
 * A value of "0deg" indicates that all glyphs are set with the top of the glyphs toward the top of the
 * reference-area. The top of the reference-area is defined by the reference-area's reference-orientation.
 *
 * A value of "90deg" indicates a rotation of 90-degrees clockwise from the "0deg" orientation.
 *
 * @link https://www.w3.org/TR/xsl11/#glyph-orientation-horizontal
 */
class GlyphOrientationHorizontal extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('glyph-orientation-horizontal', GlyphOrientationHorizontalType::class);
    }

    public function getDefaultValue(): string
    {
        return '0deg';
    }
}
