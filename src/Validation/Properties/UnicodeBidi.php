<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\UnicodeBidiType;

/**
 * CSS2 Definition:
 * - Value:  normal | embed | bidi-override | inherit
 * - Initial:  normal
 * - Inherited:  no
 * - Percentages:  N/A
 * - Media:  visual
 *
 * The final order of characters in each block-level element is the same as if the bidi control codes
 * had been added as described above, markup had been stripped, and the resulting character sequence
 * had been passed to an implementation of the Unicode bidirectional algorithm for plain text that
 * produced the same line-breaks as the styled text. In this process, non-textual entities such as
 * images are treated as neutral characters, unless their 'unicode-bidi' property has a value other
 * than 'normal', in which case they are treated as strong characters in the 'direction' specified
 * for the element.
 *
 * Please note that in order to be able to flow inline boxes in a uniform direction (either entirely
 * left-to-right or entirely right-to-left), more inline boxes (including anonymous inline boxes) may
 * have to be created, and some inline boxes may have to be split up and reordered before flowing.
 *
 * Because the Unicode algorithm has a limit of 15 levels of embedding, care should be taken not to
 * use 'unicode-bidi' with a value other than 'normal' unless appropriate. In particular, a value of
 * 'inherit' should be used with extreme caution. However, for elements that are, in general, intended
 * to be displayed as blocks, a setting of 'unicode-bidi: embed' is preferred to keep the element
 * together in case display is changed to inline.
 *
 * XSL modifications to the CSS definition:
 *
 * The phrasing of the first paragraph of the general description (following the value breakouts)
 * should read "The final order of presentation of the characters...".
 *
 * In Unicode 3.0, the Unicode Consortium has increased the limit of the levels of embedding to 61
 * (definition BD2 in [UNICODE UAX #9]).
 *
 * Fallback: If it is not possible to present the characters in the correct order, then the User Agent
 * should display either a 'missing character' glyph or display some indication that the content cannot
 * be correctly rendered.
 *
 * @link https://www.w3.org/TR/xsl11/#unicode-bidi
 */
class UnicodeBidi extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('unicode-bidi', UnicodeBidiType::class);
    }

    public function getDefaultValue(): string
    {
        return UnicodeBidiType::NORMAL;
    }
}
