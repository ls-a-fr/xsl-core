<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\SpeakNumeralType;

/**
 * CSS2 Definition:
 * - Value:  digits | continuous | inherit
 * - Initial:  continuous
 * - Inherited:  yes
 * - Percentages:  N/A
 * - Media:  aural
 *
 * This property controls how numerals are spoken.
 *
 * @link https://www.w3.org/TR/xsl11/#speak-numeral
 * @link http://www.w3.org/TR/REC-CSS2/tables.html#propdef-speak-numeral
 */
class SpeakNumeral extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('speak-numeral', SpeakNumeralType::class);
    }

    public function getDefaultValue(): string
    {
        return SpeakNumeralType::CONTINUOUS;
    }
}
