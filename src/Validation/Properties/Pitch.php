<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\PitchType;

/**
 * CSS2 Definition:
 * - Value:  `<frequency>` | x-low | low | medium | high | x-high | inherit
 * - Initial:  medium
 * - Inherited:  yes
 * - Percentages:  N/A
 * - Media:  aural
 *
 * Specifies the average pitch (a frequency) of the speaking voice. The average pitch of a voice depends on
 * the voice family. For example, the average pitch for a standard male voice is around 120Hz, but for a
 * female voice, it's around 210Hz.
 *
 * @link https://www.w3.org/TR/xsl11/#pitch
 * @link http://www.w3.org/TR/REC-CSS2/aural.html#propdef-pitch
 */
class Pitch extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('pitch', PitchType::class);
    }

    public function getDefaultValue(): string
    {
        return PitchType::MEDIUM;
    }
}
