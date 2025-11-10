<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tags\Indexing;

use Lsa\Xsl\Core\Contracts\HasAuralFallback;
use Lsa\Xsl\Core\Contracts\HasVisualFallback;
use Lsa\Xsl\Core\Tags\Layout\Root;
use Lsa\Xsl\Core\Traits\ExtendedAuralConformance;
use Lsa\Xsl\Core\Traits\ExtendedVisualConformance;
use Lsa\Xsl\Core\Validation\Tags\IndexPageNumberPrefix as W3IndexPageNumberPrefix;
use Lsa\Xsl\Core\Xml\Tag;

/**
 * The fo:index-page-number-prefix formatting object specifies a static prefix for the cited page items created
 * by fo:index-key-reference.
 *
 * Areas:
 * The fo:index-page-number-prefix formatting object does not directly produce any areas. Its children will be
 * retrieved and used by fo:index-page-citation-list when formatting cited page items and cited page item ranges.
 *
 * Constraints:
 * None.
 *
 * Contents:
 * (#PCDATA|%inline;)*
 *
 * @see https://www.w3.org/TR/xsl11/#fo_index-page-number-prefix
 */
class IndexPageNumberPrefix extends Tag implements HasAuralFallback, HasVisualFallback
{
    use ExtendedAuralConformance;
    use ExtendedVisualConformance;
    use W3IndexPageNumberPrefix;

    public function getVisualFallback(Root $root): ?Tag
    {
        // Fallback: ignore.
        return null;
    }

    public function getAuralFallback(Root $root): ?Tag
    {
        // Fallback: ignore.
        return null;
    }
}
