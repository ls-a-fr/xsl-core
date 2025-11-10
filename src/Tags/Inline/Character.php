<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tags\Inline;

use Lsa\Xsl\Core\Traits\BasicAuralConformance;
use Lsa\Xsl\Core\Traits\BasicVisualConformance;
use Lsa\Xsl\Core\Validation\Tags\Character as ValidateCharacter;
use Lsa\Xsl\Core\Xml\Tag;

/**
 * The fo:character flow object represents a character that is mapped to a glyph for presentation. It is an
 * atomic unit to the formatter.
 *
 * When the result tree is interpreted as a tree of formatting objects, a character in the result tree is
 * treated as if it were an empty element of type fo:character with a character attribute equal to the Unicode
 * representation of the character. The semantics of an "auto" value for character properties, which is
 * typically their initial value, are based on the Unicode code point. Overrides may be specified in an
 * implementation-specific manner.
 *
 * Note:
 * In a stylesheet the explicit creation of an fo:character may be used to explicitly override the default
 * mapping.
 *
 * Unicode Tag Characters need not be supported.
 *
 * Note:
 * Unicode Version 3.1, in fact, states that they are not to be used "with any protocols that provide
 * alternate means for language tagging, such as HTML or XML.". Unicode TR20 also declares
 * very clearly that they are not suitable together with markup.
 *
 * @see https://www.w3.org/TR/xsl11/#UNICODE-TR20
 *
 * Areas:
 * The fo:character formatting object generates and returns one or more normal inline-area.
 *
 * Note:
 * Cases where more than one inline-area is generated are encountered in scripts where a single character
 * generates both a prefix and a suffix glyph to some other character.
 *
 * Constraints:
 * The dimensions of the areas are determined by the font metrics for the glyph.
 *
 * When formatting an fo:character with a "treat-as-word-space" value of "true", the User Agent may use a
 * different method for determining the inline-progression-dimension of the area.
 *
 * Note:
 * Such methods typically make use of a word space value stored in the font, or a formatter defined word space
 * value.
 *
 * Contents:
 * EMPTY
 * @see https://www.w3.org/TR/xsl11/#fo_character
 */
class Character extends Tag
{
    use BasicAuralConformance;
    use BasicVisualConformance;
    use ValidateCharacter;
}
