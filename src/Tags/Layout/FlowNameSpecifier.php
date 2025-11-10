<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tags\Layout;

use Lsa\Xsl\Core\Contracts\HasAuralFallback;
use Lsa\Xsl\Core\Contracts\HasVisualFallback;
use Lsa\Xsl\Core\Traits\ExtendedAuralConformance;
use Lsa\Xsl\Core\Traits\ExtendedVisualConformance;
use Lsa\Xsl\Core\Validation\Tags\FlowNameSpecifier as W3FlowNameSpecifier;
use Lsa\Xsl\Core\Xml\Tag;

/**
 * The fo:flow-name-specifier is used to specify one flow in a source-list.
 *
 * Areas:
 * The fo:flow-name-specifier formatting object generates no area directly. It is used by the fo:page-sequence
 * formatting object to assign flows to regions.
 *
 * Constraints:
 * The flow-name-reference property specifies the name of a flow in the source sequence.
 *
 * Contents:
 * EMPTY
 *
 * @see https://www.w3.org/TR/xsl11/#fo_flow-name-specifier
 */
class FlowNameSpecifier extends Tag implements HasAuralFallback, HasVisualFallback
{
    use ExtendedAuralConformance;
    use ExtendedVisualConformance;
    use W3FlowNameSpecifier;

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
