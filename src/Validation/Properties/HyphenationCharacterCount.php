<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\HyphenationCharacterCountType;

/**
 * XSL Definition:
 * - Value:  `<number>` | inherit
 * - Initial:  2
 * - Inherited:  yes
 * - Percentages:  N/A
 * - Media:  visual
 *
 * Used with hyphenation-push-character-count and hyphenation-remain-character-count.
 *
 * @link https://www.w3.org/TR/xsl11/#hyphenation-character-count
 */
class HyphenationCharacterCount extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('hyphenation-character-count', HyphenationCharacterCountType::class);
    }

    public function getDefaultValue(): string
    {
        return '2';
    }
}
