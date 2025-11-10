<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\LeaderAlignmentType;

/**
 * XSL Definition:
 * - Value:  none | reference-area | page | inherit
 * - Initial:  none
 * - Inherited:  yes
 * - Percentages:  N/A
 * - Media:  visual
 *
 * Specifies whether fo:leaders having identical content and property values shall have their patterns
 * aligned with each other, with respect to their common reference-area or page.
 *
 * For fo:leaders where the "leader-pattern" property is specified as "dot" or as "use-content", this
 * property will be honored.
 *
 * If the fo:leader is aligned, the start-edge of each cycle of the repeated pattern will be placed on
 * the start-edge of the next cycle in the appropriate pattern-alignment grid.
 *
 * @link https://www.w3.org/TR/xsl11/#leader-alignment
 */
class LeaderAlignment extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('leader-alignment', LeaderAlignmentType::class);
    }

    public function getDefaultValue(): string
    {
        return LeaderAlignmentType::NONE;
    }
}
