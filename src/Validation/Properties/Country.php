<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\CountryType;

/**
 * XSL Definition:
 * Value:  none | `<country>` | inherit
 * Initial:  none
 * Inherited:  yes
 * Percentages:  N/A
 * Media:  visual
 *
 * Specifies the country to be used by the formatter in language-/locale-coupled services, such as
 * line-justification strategy, line-breaking, and hyphenation.
 *
 * Note:
 * This may affect line composition in a system-dependent way.
 *
 * @link https://www.w3.org/TR/xsl11/#country
 */
class Country extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('country', CountryType::class);
    }

    public function getDefaultValue(): string
    {
        return CountryType::NONE;
    }
}
