<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tags\Indexing;

use Lsa\Xsl\Core\Contracts\HasAuralFallback;
use Lsa\Xsl\Core\Contracts\HasVisualFallback;
use Lsa\Xsl\Core\Tags\Layout\Root;
use Lsa\Xsl\Core\Traits\ExtendedAuralConformance;
use Lsa\Xsl\Core\Traits\ExtendedVisualConformance;
use Lsa\Xsl\Core\Validation\Tags\IndexRangeEnd as W3IndexRangeEnd;
use Lsa\Xsl\Core\Xml\Tag;

/**
 * The fo:index-range-end is used to indicate the end of an "indexed range" that is started by its matching
 * fo:index-range-begin. See 6.10.4 fo:index-range-begin for details.
 *
 * Areas:
 * The fo:index-range-end does not generate any area.
 *
 * Constraints:
 * Preceding this fo:index-range-end in document order, there must be an fo:index-range-begin with which it
 * forms a matching pair. If there is no such fo:index-range-begin, it is an error, and the implementation
 * should recover by ignoring this fo:index-range-end.
 *
 * Contents:
 * EMPTY
 *
 * @see https://www.w3.org/TR/xsl11/#fo_index-range-end
 */
class IndexRangeEnd extends Tag implements HasAuralFallback, HasVisualFallback
{
    use ExtendedAuralConformance;
    use ExtendedVisualConformance;
    use W3IndexRangeEnd;

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
