<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\SpeechRateType;

/**
 * CSS2 Definition:
 * - Value:  `<number>` | x-slow | slow | medium | fast | x-fast | faster | slower | inherit
 * - Initial:  medium
 * - Inherited:  yes
 * - Percentages:  N/A
 * - Media:  aural
 *
 * This property specifies the speaking rate. Note that both absolute and relative keyword values
 * are allowed (compare with 'font-size').
 *
 * `<number>`: Specifies the speaking rate in words per minute, a quantity that varies somewhat by
 * language but is nevertheless widely supported by speech synthesizers.
 *
 * @link https://www.w3.org/TR/xsl11/#speech-rate
 * @link http://www.w3.org/TR/REC-CSS2/tables.html#propdef-speech-rate
 */
class SpeechRate extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('speech-rate', SpeechRateType::class);
    }

    public function getDefaultValue(): string
    {
        return SpeechRateType::MEDIUM;
    }
}
