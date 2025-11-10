<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Xsl\AngleType;

/**
 * Validates GlyphOrientationVertical property.
 *
 * @link https://www.w3.org/TR/xsl11/#glyph-orientation-vertical
 */
class GlyphOrientationVerticalType extends Type implements Validator
{
    /**
     * - Fullwidth ideographic and fullwidth Latin text (excluding ideographic punctuation) will be set
     *   with a glyph-orientation of 0-degrees. Ideographic punctuation and other ideographic characters
     *   having alternate horizontal and vertical forms will use the vertical form of the glyph.
     * - Text which is not fullwidth will be set with a glyph-orientation of 90-degrees. This
     *   reorientation rule applies only to the first-level non-ideographic text. All further embedding
     *   of writing-modes or BIDI processing will be based on the first-level rotation.
     *
     * Note:
     * - This is equivalent to having set the non-ideographic text string horizontally honoring the
     *   bidi-rule, then rotating the resultant sequence of inline-areas (one area for each change of glyph
     *   direction) 90-degrees clockwise.
     * - It should be noted that text set in this "rotated" manner may contain ligatures or other glyph
     *   combining and reordering common to the language and script. (This "rotated" presentation form does
     *   not disable auto-ligature formation or similar context-driven variations.)
     * - The determination of which characters should be auto-rotated may vary across User Agents. The
     *   determination is based on a complex interaction between country, language, script, character
     *   properties, font, and character context. It is suggested that one consult the Unicode TR 11 and
     *   the various JIS or other national standards.
     */
    public const AUTO = 'auto';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new AngleType(),
            new EnumValidator([
                self::AUTO,
                self::INHERIT,
            ])
        ));
    }
}
