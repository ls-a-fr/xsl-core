<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tags\Indexing;

use Lsa\Xsl\Core\Contracts\HasAuralFallback;
use Lsa\Xsl\Core\Contracts\HasVisualFallback;
use Lsa\Xsl\Core\Tags\Layout\Root;
use Lsa\Xsl\Core\Traits\ExtendedAuralConformance;
use Lsa\Xsl\Core\Traits\ExtendedVisualConformance;
use Lsa\Xsl\Core\Validation\Tags\IndexRangeBegin as W3IndexRangeBegin;
use Lsa\Xsl\Core\Xml\Tag;

/**
 * The fo:index-range-begin formatting object is used to indicate the beginning of an "indexed range" associated
 * with an index key. The index range is ended by a corresponding fo:index-range-end.
 * All formatting objects following (in document order) this fo:index-range-begin, and up to the matching
 * fo:index-range-end, are considered to be under the index range influence of this fo:index-range-begin.
 *
 * Areas:
 * The fo:index-range-begin does not generate any area.
 *
 * Constraints:
 * Each fo:index-range-begin formatting object must specify both an id and an index-key property.
 *
 * An fo:index-range-begin/fo:index-range-end pair is considered a matching pair if the ref-id property of the
 * fo:index-range-end has the same value as the id property on the fo:index-range-begin.
 * Following this fo:index-range-begin in document order, there must be an fo:index-range-end with which it
 * forms a matching pair. If there is no such fo:index-range-end, it is an error, and the implementation should
 * recover by assuming the equivalent of a matching fo:index-range-end at the end of the document.
 *
 * Contents:
 * EMPTY
 *
 * @see https://www.w3.org/TR/xsl11/#fo_index-range-begin
 */
class IndexRangeBegin extends Tag implements HasAuralFallback, HasVisualFallback
{
    use ExtendedAuralConformance;
    use ExtendedVisualConformance;
    use W3IndexRangeBegin;

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
