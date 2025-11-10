<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\WordSpacingType;

/**
 * CSS2 Definition:
 * - Value:  normal | `<length>` | `<space>` | inherit
 * - Initial:  normal
 * - Inherited:  yes
 * - Percentages:  N/A
 * - Media:  visual
 *
 * This property specifies spacing behavior between words.
 * XSL modifications to the CSS definition:
 *
 * The following value type has been added for XSL:
 * `<space>`: This allows the user to specify a range of adjustments in addition to the default
 * space between words. The minimum and maximum values specify the limits of the adjustment.
 *
 * Default space between words is defined to be the inline-progression-dimension of the glyph-area
 * obtained by formatting the current fo:character whose treat-as-word-space trait has the value
 * "true".
 *
 * For fo:character whose treat-as-word-space trait has the value "true", the space-start and
 * space-end traits are each set to a value as follows:
 * - For "normal": .optimum = ("the normal inter-word space, as defined by the current font and/or
 * the UA" - "the inline-progression-dimension of the glyph-area obtained by formatting the
 * fo:character") / 2, .maximum = .optimum, .minimum = .optimum, .precedence = force, and
 * .conditionality = discard.
 * - For a `<length>`: .optimum = `<length>` / 2, .maximum = .optimum, .minimum = .optimum,
 * .precedence = force, and .conditionality = discard.
 * - For a `<space>`: a value that is half the value of the "word-spacing" property for the numeric
 * components and the value for the .precedence and .conditionality components. The initial values
 * for .precedence is "force" and for .conditionality "discard".
 *
 * Note: If it is desired that the word space combine with other spaces that have less than forcing
 * precedence, then the value of the word space should be specified as a <space> with precedence less
 * than force which implies that space combines according to the space resolution rules described in
 * 4.3 Spaces and Conditionality.
 * The algorithm for resolving the adjusted values between word spacing and letter spacing is
 * User Agent dependent.
 *
 * Note:
 * The "word-spacing" property only affects the placement of glyphs and not the shape that may be
 * associated with the characters. For example, adjusting a "_" treated as a word space does not
 * lengthen or shorten the "_" glyph.
 *
 * @link https://www.w3.org/TR/xsl11/#word-spacing
 */
class WordSpacing extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('word-spacing', WordSpacingType::class);
    }

    public function getDefaultValue(): string
    {
        return WordSpacingType::NORMAL;
    }
}
