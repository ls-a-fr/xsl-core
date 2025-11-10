<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\HyphenateType;

/**
 * XSL Definition:
 * - Value:  false | true | inherit
 * - Initial:  false
 * - Inherited:  yes
 * - Percentages:  N/A
 * - Media:  visual
 *
 * Specifies whether hyphenation is allowed during line-breaking when the formatter is formatting this
 * formatting object. It is implementation defined whether hyphenation may be used between a character
 * for which the value is "true" and one for which the value is "false".
 *
 * @link https://www.w3.org/TR/xsl11/#hyphenate
 */
class Hyphenate extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('hyphenate', HyphenateType::class);
    }

    public function getDefaultValue(): string
    {
        return HyphenateType::FALSE;
    }
}
