<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\SpeakType;

/**
 * CSS2 Definition:
 * - Value:  normal | none | spell-out | inherit
 * - Initial:  normal
 * - Inherited:  yes
 * - Percentages:  N/A
 * - Media:  aural
 *
 * This property specifies whether text will be rendered aurally and if so, in what manner.
 *
 * @link https://www.w3.org/TR/xsl11/#speak
 * @link http://www.w3.org/TR/REC-CSS2/aural.html#propdef-speak
 */
class Speak extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('speak', SpeakType::class);
    }

    public function getDefaultValue(): string
    {
        return SpeakType::NORMAL;
    }
}
