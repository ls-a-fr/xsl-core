<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\RuleStyleType;

/**
 * XSL Definition:
 * - Value:  none | dotted | dashed | solid | double | groove | ridge | inherit
 * - Initial:  solid
 * - Inherited:  yes
 * - Percentages:  N/A
 * - Media:  visual
 *
 * Specifies the style (pattern) of the rule.
 *
 * This property applies only if the "leader-pattern" property is specified as "rule".
 *
 * Implementations must support the "none" and "solid" values, as defined in this Recommendation. Other
 * values may be treated as if "solid" had been specified.
 *
 * @link https://www.w3.org/TR/xsl11/#rule-style
 */
class RuleStyle extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('rule-style', RuleStyleType::class);
    }

    public function getDefaultValue(): string
    {
        return RuleStyleType::SOLID;
    }
}
