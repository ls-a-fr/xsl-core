<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tags\Layout;

use Lsa\Xsl\Core\Contracts\HasAuralFallback;
use Lsa\Xsl\Core\Contracts\HasVisualFallback;
use Lsa\Xsl\Core\Traits\ExtendedAuralConformance;
use Lsa\Xsl\Core\Traits\ExtendedVisualConformance;
use Lsa\Xsl\Core\Validation\Tags\FlowSourceList as W3FlowSourceList;
use Lsa\Xsl\Core\Xml\Tag;

/**
 * The fo:flow-source-list is used to specify the sequence of flows to assign in a particular fo:flow-assignment.
 *
 * Areas:
 * The fo:flow-source-list formatting object generates no area directly. It is used by the fo:page-sequence
 * formatting object to assign flows to regions.
 *
 * Constraints:
 * The children of the fo:flow-source-list are a sequence of flow-name-specifiers identifying flows of the
 * sequence. These flows must be either all fo:flow formatting objects or all fo:static-content formatting
 * objects. It is an error if they are a mixture.
 *
 * Contents:
 * (flow-name-specifier+)
 *
 * @see https://www.w3.org/TR/xsl11/#fo_flow-source-list
 */
class FlowSourceList extends Tag implements HasAuralFallback, HasVisualFallback
{
    use ExtendedAuralConformance;
    use ExtendedVisualConformance;
    use W3FlowSourceList;

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
