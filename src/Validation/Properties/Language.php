<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\LanguageType;

/**
 * XSL Definition:
 * - Value:  none | `<language>` | inherit
 * - Initial:  none
 * - Inherited:  yes
 * - Percentages:  N/A
 * - Media:  visual
 *
 * Specifies the language to be used by the formatter in language-/locale-coupled services, such as
 * line-justification strategy, line-breaking, and hyphenation.
 *
 * Note:
 * This may affect line composition in a system-dependent way.
 *
 * Note:
 * ISO 639 2-letter and ISO 639-2 terminology 3-letter codes are also used in the language component of
 * [RFC3066], but user-defined and IANA registered language codes that are allowed in RFC 3066 are not
 * allowed as the value of this property.
 *
 * @link https://www.w3.org/TR/xsl11/#language
 * @link https://www.w3.org/TR/xsl11/#RFC3066
 */
class Language extends TypedAttribute
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('language', LanguageType::class);
    }
}
