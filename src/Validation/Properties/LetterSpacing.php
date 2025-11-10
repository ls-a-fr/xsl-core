<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\LetterSpacingType;

/**
 * CSS2 Definition:
 * - Value:  normal | `<length>` | `<space>` | inherit
 * - Initial:  normal
 * - Inherited:  yes
 * - Percentages:  N/A
 * - Media:  visual
 *
 * This property specifies spacing behavior between text characters.
 *
 * Character-spacing algorithms are user agent dependent. Character spacing may also be influenced
 * by justification (see the "text-align" property).
 *
 * When the resultant space between two characters is not the same as the default space, user agents
 * should not use ligatures.
 *
 * Conforming user agents may consider the value of the 'letter-spacing' property to be 'normal'.
 *
 * XSL modifications to the CSS definition:
 *
 * The following value type has been added for XSL: `<space>`.
 *
 * This allows the user to specify a range of adjustments in addition to the default space between
 * characters.
 *
 * The minimum and maximum values specify the limits of the adjustment.
 *
 * Default space between characters is defined to be 0pt, i.e., glyph-areas stacked with no extra space
 * between the allocation-rectangles of the glyph-areas. The inline-progression-dimension of the
 * glyph-area is obtained by formatting the fo:character.
 *
 * For an fo:character that in the Unicode database is classified as "Alphabetic", unless the
 * treat-as-word-space trait has the value "true", the space-start and space-end traits are each set to
 * a value as follows:
 * - For "normal": .optimum = "the normal spacing for the current font" / 2, .maximum = auto,
 * .minimum = auto, .precedence = force, and .conditionality = discard. A value of auto for a component
 * implies that the limits are User Agent specific.
 * - For a `<length>`: .optimum = `<length>` / 2, .maximum = .optimum, .minimum = .optimum,
 * .precedence = force, and .conditionality = discard.
 * - For a `<space>`: a value that is half the value of the "letter-spacing" property for the numeric
 * components and the value for the .precedence and .conditionality components. The initial values for
 * .precedence is "force" and for .conditionality "discard".
 *
 * The CSS statement that "Conforming user agents may consider the value of the 'letter-spacing'
 * property to be 'normal'." does not apply in XSL, if the User Agent implements the "Extended" property
 * set.
 *
 * Note: If it is desired that the letter space combine with other spaces that have less than forcing
 * precedence, then the value of the "letter-space" should be specified as a <space> with precedence less
 * than force which implies that space combines according to the space resolution rules described in
 * 4.3 Spaces and Conditionality.
 *
 * The algorithm for resolving the adjusted values between word spacing and letter spacing is User Agent
 * dependent.
 *
 * @link https://www.w3.org/TR/xsl11/#letter-spacing
 * @link http://www.w3.org/TR/REC-CSS2/text.html#propdef-letter-spacing
 */
class LetterSpacing extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('letter-spacing', LetterSpacingType::class);
    }

    public function getDefaultValue(): string
    {
        return LetterSpacingType::NORMAL;
    }
}
