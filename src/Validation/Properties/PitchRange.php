<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\PitchRangeType;

/**
 * CSS2 Definition:
 * - Value:  `<number>` | inherit
 * - Initial:  50
 * - Inherited:  yes
 * - Percentages:  N/A
 * - Media:  aural
 *
 * Specifies variation in average pitch. The perceived pitch of a human voice is determined by the
 * fundamental frequency and typically has a value of 120Hz for a male voice and 210Hz for a female voice.
 * Human languages are spoken with varying inflection and pitch; these variations convey additional meaning
 * and emphasis. Thus, a highly animated voice, i.e., one that is heavily inflected, displays a high pitch
 * range. This property specifies the range over which these variations occur, i.e., how much the fundamental
 * frequency may deviate from the average pitch.
 *
 * A value between '0' and '100'. A pitch range of '0' produces a flat, monotonic voice. A pitch range of 50
 * produces normal inflection. Pitch ranges greater than 50 produce animated voices.
 *
 * @link https://www.w3.org/TR/xsl11/#pitch-range
 * @link http://www.w3.org/TR/REC-CSS2/aural.html#propdef-pitch-range
 */
class PitchRange extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('pitch-range', PitchRangeType::class);
    }

    public function getDefaultValue(): string
    {
        return '50';
    }
}
