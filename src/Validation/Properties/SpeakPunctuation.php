<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\SpeakPunctuationType;

/**
 * CSS2 Definition:
 * - Value:  code | none | inherit
 * - Initial:  none
 * - Inherited:  yes
 * - Percentages:  N/A
 * - Media:  aural
 *
 * This property specifies how punctuation is spoken.
 *
 * @link https://www.w3.org/TR/xsl11/#speak-punctuation
 * @link http://www.w3.org/TR/REC-CSS2/tables.html#propdef-speak-punctuation
 */
class SpeakPunctuation extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('speak-punctuation', SpeakPunctuationType::class);
    }

    public function getDefaultValue(): string
    {
        return SpeakPunctuationType::NONE;
    }
}
