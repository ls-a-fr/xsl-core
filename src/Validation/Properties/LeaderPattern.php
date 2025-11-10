<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\LeaderPatternType;

/**
 * XSL Definition:
 * - Value:  space | rule | dots | use-content | inherit
 * - Initial:  space
 * - Inherited:  yes
 * - Percentages:  N/A
 * - Media:  visual
 *
 * Provides the specification of how to fill in the leader.
 *
 * If the leader is aligned, the start-edge of each cycle of each repeating pattern component will be
 * placed on the start-edge of the next cycle in the pattern-alignment grid.
 *
 * Implementations must support the "space", "rule", and "dots" values, as defined in this
 * Recommendation. The "use-content" value may be treated as if "space" had been specified.
 *
 * @link https://www.w3.org/TR/xsl11/#leader-pattern
 */
class LeaderPattern extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('leader-pattern', LeaderPatternType::class);
    }

    public function getDefaultValue(): string
    {
        return LeaderPatternType::SPACE;
    }
}
