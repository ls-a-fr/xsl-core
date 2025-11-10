<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\ScriptType;

/**
 * XSL Definition:
 * - Value:  none | auto | `<script>` | inherit
 * - Initial:  auto
 * - Inherited:  yes
 * - Percentages:  N/A
 * - Media:  visual
 *
 * The script to be used by the formatter in language-/locale-coupled services, such as
 * line-justification strategy, line-breaking, and hyphenation.
 *
 * @link https://www.w3.org/TR/xsl11/#script
 */
class Script extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('script', ScriptType::class);
    }

    public function getDefaultValue(): string
    {
        return ScriptType::AUTO;
    }
}
