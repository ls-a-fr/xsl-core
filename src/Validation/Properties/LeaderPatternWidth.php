<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\LeaderPatternWidthType;

/**
 * XSL Definition:
 * - Value:  use-font-metrics | `<length>` | `<percentage>` | inherit
 * - Initial:  use-font-metrics
 * - Inherited:  yes
 * - Percentages:  refer to the inline-progression-dimension of content-rectangle of parent area
 * - Media:  visual
 *
 * Specifies the length of each repeat cycle in a repeating leader.
 *
 * For leaders where the "leader-pattern" property is specified as "dots" or as "use-content", this
 * property will be honored.
 *
 * @link https://www.w3.org/TR/xsl11/#leader-pattern-width
 */
class LeaderPatternWidth extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('leader-pattern-width', LeaderPatternWidthType::class);
    }

    public function getDefaultValue(): string
    {
        return LeaderPatternWidthType::USE_FONT_METRICS;
    }
}
