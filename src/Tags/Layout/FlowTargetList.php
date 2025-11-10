<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tags\Layout;

use Lsa\Xsl\Core\Contracts\HasAuralFallback;
use Lsa\Xsl\Core\Contracts\HasVisualFallback;
use Lsa\Xsl\Core\Traits\ExtendedAuralConformance;
use Lsa\Xsl\Core\Traits\ExtendedVisualConformance;
use Lsa\Xsl\Core\Validation\Tags\FlowTargetList as W3FlowTargetList;
use Lsa\Xsl\Core\Xml\Tag;

/**
 * The fo:flow-target-list is used to specify the sequence of regions to which flows are assigned in a
 * particular fo:flow-assignment.
 *
 * Areas:
 * The fo:flow-target-list formatting object generates no area directly. It is used by the fo:page-sequence
 * formatting object to assign flows to regions.
 *
 * Constraints:
 * The children of the fo:flow-target-list are a sequence of region-name-specifiers identifying regions in the
 * sequence.
 *
 * Contents:
 * (region-name-specifier+)
 *
 * @see https://www.w3.org/TR/xsl11/#fo_flow-target-list
 */
class FlowTargetList extends Tag implements HasAuralFallback, HasVisualFallback
{
    use ExtendedAuralConformance;
    use ExtendedVisualConformance;
    use W3FlowTargetList;

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
