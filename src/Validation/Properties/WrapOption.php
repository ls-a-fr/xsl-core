<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\WrapOptionType;

/**
 * XSL Definition:
 * - Value:  no-wrap | wrap | inherit
 * - Initial:  wrap
 * - Inherited:  yes
 * - Percentages:  N/A
 * - Media:  visual
 *
 * Specifies how line-wrapping (line-breaking) of the content of the formatting object is to be
 * handled.
 * Implementations must support the "no-wrap" value, as defined in this Recommendation, when the
 * value of "linefeed-treatment" is "preserve".
 *
 * @link https://www.w3.org/TR/xsl11/#wrap-option
 */
class WrapOption extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('wrap-option', WrapOptionType::class);
    }

    public function getDefaultValue(): string
    {
        return WrapOptionType::WRAP;
    }
}
