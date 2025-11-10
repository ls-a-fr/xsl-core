<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\FontFamilyType;

/**
 * CSS2 Definition: as amended by http://www.w3.org/Style/css2-updates/REC-CSS2-19980512-errata.html#x73
 * - Value:  [[ <family-name> | <generic-family> ],]* [<family-name> | <generic-family>] | inherit
 * - Initial:  depends on user agent
 * - Inherited:  yes
 * - Percentages:  N/A
 * - Media:  visual
 *
 * This property specifies a prioritized list of font family names and/or generic family names. To deal with
 * the problem that a single font may not contain glyphs to display all the characters in a document, or that
 * not all fonts are available on all systems, this property allows authors to specify a list of fonts, all
 * of the same style and size, that are tried in sequence to see if they contain a glyph for a certain
 * character. This list is called a font set.
 *
 * The generic font family will be used if one or more of the other fonts in a font set is unavailable.
 * Although many fonts provide the "missing character" glyph, typically an open box, as its name implies this
 * should not be considered a match except for the last font in a font set.
 *
 * There are two types of font family names:
 * `<family-name>`:
 *     The name of a font-family of choice. In the previous example [in the CSS2 Recommendation], "Baskerville",
 *     "Heisi Mincho W3", and "Symbol" are font families. Font family names containing whitespace should be
 *     quoted. If quoting is omitted, any whitespace characters before and after the font name are ignored and
 *     any sequence of whitespace characters inside the font name is converted to a single space.
 *
 * `<generic-family>`:
 *     The following generic families are defined: "serif", "sans-serif", "cursive", "fantasy", and "monospace".
 *     Please see the section on generic font families for descriptions of these families. Generic font family
 *     names are keywords, and therefore must not be quoted.
 *
 * XSL modifications to the CSS definition:
 * `<string>`:
 *     The names are syntactically expressed as strings.
 *
 * Note:
 * See the expression language for a two-argument "system-font" function that returns a characteristic of a
 * system-font. This may be used, instead of the "font" shorthand, to specify the name of a system-font.
 *
 * @link https://www.w3.org/TR/xsl11/#font-family
 * @link http://www.w3.org/TR/REC-CSS2/fonts.html#propdef-font-family
 */
class FontFamily extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('font-family', FontFamilyType::class);
    }

    /**
     * Note that this depends on user-agents. A choice was made here (stick to CSS2.1 suggestion), to be
     * compliant.
     * This value can be overriden by Profiles.
     */
    public function getDefaultValue(): string
    {
        return 'serif';
    }
}
