<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\StressType;

/**
 * CSS2 Definition:
 * - Value:  `<number>` | x-slow | slow | medium | fast | x-fast | faster | slower | inherit
 * - Initial:  medium
 * - Inherited:  yes
 * - Percentages:  N/A
 * - Media:  aural
 *
 * Specifies the height of "local peaks" in the intonation contour of a voice. For example, English
 * is a stressed language, and different parts of a sentence are assigned primary, secondary, or
 * tertiary stress. The value of 'stress' controls the amount of inflection that results from these
 * stress markers. This property is a companion to the 'pitch-range' property and is provided to
 * allow developers to exploit higher-end auditory displays.
 *
 * `<number>`: A value, between '0' and '100'. The meaning of values depends on the language being
 * spoken. For example, a level of '50' for a standard, English-speaking male voice
 * (average pitch = 122Hz), speaking with normal intonation and emphasis would have a different
 * meaning than '50' for an Italian voice.
 *
 * @link https://www.w3.org/TR/xsl11/#stress
 * @link http://www.w3.org/TR/REC-CSS2/tables.html#propdef-stress
 */
class Stress extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('stress', StressType::class);
    }

    public function getDefaultValue(): string
    {
        return '50';
    }
}
