<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\HyphenationKeepType;

/**
 * XSL Definition:
 * - Value:  auto | column | page | inherit
 * - Initial:  auto
 * - Inherited:  yes
 * - Percentages:  N/A
 * - Media:  visual
 *
 * Controls whether hyphenation can be performed on the last line that fits in a given reference-area.
 *
 * @link https://www.w3.org/TR/xsl11/#hyphenation-keep
 */
class HyphenationKeep extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('hyphenation-keep', HyphenationKeepType::class);
    }

    public function getDefaultValue(): string
    {
        return HyphenationKeepType::AUTO;
    }
}
