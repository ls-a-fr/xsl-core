<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\HyphenationLadderCountType;

/**
 * XSL Definition:
 * - Value:  no-limit | `<number>` | inherit
 * - Initial:  no-limit
 * - Inherited:  yes
 * - Percentages:  N/A
 * - Media:  visual
 *
 * Specifies a limit on the number of successive hyphenated line-areas the formatter may generate
 * in a block-area.
 *
 * @link https://www.w3.org/TR/xsl11/#hyphenation-ladder-count
 */
class HyphenationLadderCount extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('hyphenation-ladder-count', HyphenationLadderCountType::class);
    }

    public function getDefaultValue(): string
    {
        return HyphenationLadderCountType::NO_LIMIT;
    }
}
