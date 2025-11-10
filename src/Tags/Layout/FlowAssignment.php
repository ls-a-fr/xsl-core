<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tags\Layout;

use Lsa\Xsl\Core\Contracts\HasAuralFallback;
use Lsa\Xsl\Core\Contracts\HasVisualFallback;
use Lsa\Xsl\Core\Traits\ExtendedAuralConformance;
use Lsa\Xsl\Core\Traits\ExtendedVisualConformance;
use Lsa\Xsl\Core\Validation\Tags\FlowAssignment as W3FlowAssignment;
use Lsa\Xsl\Core\Xml\Tag;

/**
 * The fo:flow-assignment is used to specify the assignment of one sequence of flows to a sequence of regions.
 *
 * Areas:
 * The fo:flow-assignment formatting object generates no area directly. It is used by the fo:page-sequence
 * formatting object to assign flows to regions.
 *
 * Constraints:
 * The children of the fo:flow-assignment are a source-list and target-list containing constraints for
 * assigning one sequence of flows to a sequence of regions.
 *
 * Contents:
 * (flow-source-list,flow-target-list)
 *
 * @see https://www.w3.org/TR/xsl11/#fo_flow-assignment
 */
class FlowAssignment extends Tag implements HasAuralFallback, HasVisualFallback
{
    use ExtendedAuralConformance;
    use ExtendedVisualConformance;
    use W3FlowAssignment;

    public function getVisualFallback(Root $root): ?Tag
    {
        // Fallback: ignore
        return null;
    }

    public function getAuralFallback(Root $root): ?Tag
    {
        // Fallback: ignore
        return null;
    }
}
