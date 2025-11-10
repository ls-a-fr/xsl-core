<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\ShorthandTypedAttribute;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\XmlLangType;

/**
 * XSL Definition:
 * - Value: `<language-country>` | inherit
 * - Initial: not defined for shorthand properties
 * - Inherited: yes
 * - Percentages: N/A
 * - Media: visual
 *
 * Values have the following meanings:
 *
 * `<string>`:
 * - A language and optionally a country specifier in conformance with [RFC3066], or its successor.
 *
 * Specifies the language and country to be used by the formatter in linguistic services (such as hyphenation)
 * and in the determination of line breaks. This affects line composition in a system-dependent way.
 *
 * The string may be any RFC 3066 code.
 * XSL treats xml:lang as a shorthand and uses it to set the country and language properties.
 *
 * Note: In general, linguistic services (line-justification strategy, line-breaking and hyphenation) may
 * depend on a combination of the "language", "script", and "country" properties.
 *
 * @link https://www.w3.org/TR/xsl11/#xml.lang
 */
class XmlLang extends ShorthandTypedAttribute
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct(
            'xml:lang',
            XmlLangType::class,
            [
                Country::class,
                Language::class,
            ]
        );
    }
}
