<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\HyphenationLadderCountType;

/**
 * XSL Definition:
 * - Value:  <number> | inherit
 * - Initial:  2
 * - Inherited:  yes
 * - Percentages:  N/A
 * - Media:  visual
 *
 * The hyphenation-remain-character-count specifies the minimum number of characters in a hyphenated word
 * before the hyphenation character. This is the minimum number of characters in the word left on the line
 * ending with the hyphenation character.
 *
 * @link https://www.w3.org/TR/xsl11/#hyphenation-remain-character-count
 */
class HyphenationRemainCharacterCount extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('hyphenation-remain-character-count', HyphenationLadderCountType::class);
    }

    public function getDefaultValue(): string
    {
        return '2';
    }
}
