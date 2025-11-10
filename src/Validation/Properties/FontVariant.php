<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\FontVariantType;

/**
 * CSS2 Definition:
 * - Value:  normal | small-caps | inherit
 * - Initial:  normal
 * - Inherited:  yes
 * - Percentages:  N/A
 * - Media:  visual
 *
 * In a small-caps font, the glyphs for lowercase letters look similar to the uppercase ones, but in a
 * smaller size and with slightly different proportions. The "font-variant" property requests such a
 * font for bicameral (having two cases, as with Roman script). This property has no visible effect for
 * scripts that are unicameral (having only one case, as with most of the world's writing systems).
 * Values have the following meanings.
 *
 * Insofar as this property causes text to be transformed to uppercase, the same considerations as for
 * "text-transform" apply.
 *
 * XSL modifications to the CSS definition:
 * - XSL incorporates the following text from CSS2 15.5 (http://www.w3.org/TR/REC-CSS2/fonts.html#algorithm)
 *   as part of the property definition.
 * - 'normal' matches a font not labeled as 'small-caps'; 'small-caps' matches (1) a font labeled as
 *   'small-caps', (2) a font in which the small caps are synthesized, or (3) a font where all lowercase
 *   letters are replaced by uppercase letters. A small-caps font may be synthesized by electronically scaling
 *   uppercase letters from a normal font.
 *
 * @link https://www.w3.org/TR/xsl11/#font-variant
 */
class FontVariant extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('font-variant', FontVariantType::class);
    }

    public function getDefaultValue(): string
    {
        return FontVariantType::NORMAL;
    }
}
