<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\Xsl\LengthType;

/**
 * XSL Definition:
 * - Value:  `<length>`
 * - Initial:  1.0pt
 * - Inherited:  yes
 * - Percentages:  N/A
 * - Media:  visual
 *
 * Specifies the overall thickness of the rule.
 *
 * This property applies only if the "leader-pattern" property is specified as "rule".
 *
 * Values have the following meanings:
 *
 * `<length>`:
 * - The "rule-thickness" is always perpendicular to its length-axis.
 * - The rule is thickened equally above and below the line's alignment position. This can be adjusted
 *   through the "baseline-shift" property.
 *
 * @link https://www.w3.org/TR/xsl11/#rule-thickness
 */
class RuleThickness extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('rule-thickness', LengthType::class);
    }

    public function getDefaultValue(): string
    {
        return '1pt';
    }
}
