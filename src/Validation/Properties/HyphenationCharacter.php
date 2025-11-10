<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\HyphenationCharacterType;

/**
 * XSL Definition:
 * - Value:  <character> | inherit
 * - Initial:  The Unicode hyphen character U+2010
 * - Inherited:  yes
 * - Percentages:  N/A
 * - Media:  visual
 *
 * Specifies the Unicode character to be presented when a hyphenation break occurs. The styling properties
 * of this character are those inherited from its containing flow object.
 */
class HyphenationCharacter extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('hyphenation-character', HyphenationCharacterType::class);
    }

    public function getDefaultValue(): string
    {
        /**
         * Character U+2010
         */
        return '‐';
    }
}
