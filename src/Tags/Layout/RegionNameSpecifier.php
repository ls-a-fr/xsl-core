<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tags\Layout;

use Lsa\Xsl\Core\Contracts\HasAuralFallback;
use Lsa\Xsl\Core\Contracts\HasVisualFallback;
use Lsa\Xsl\Core\Traits\ExtendedAuralConformance;
use Lsa\Xsl\Core\Traits\ExtendedVisualConformance;
use Lsa\Xsl\Core\Validation\Tags\RegionNameSpecifier as W3RegionNameSpecifier;
use Lsa\Xsl\Core\Xml\Tag;

/**
 * The fo:region-name-specifier is used to specify one region in a target-list.
 *
 * Areas:
 * The fo:region-name-specifier formatting object generates no area directly. It is used by the
 * fo:page-sequence formatting object to assign flows to regions.
 *
 * Constraints:
 * The region-name-reference property specifies the name of a region in the target sequence.
 *
 * Contents:
 * EMPTY
 *
 * @see https://www.w3.org/TR/xsl11/#fo_region-name-specifier
 */
class RegionNameSpecifier extends Tag implements HasAuralFallback, HasVisualFallback
{
    use ExtendedAuralConformance;
    use ExtendedVisualConformance;
    use W3RegionNameSpecifier;

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
