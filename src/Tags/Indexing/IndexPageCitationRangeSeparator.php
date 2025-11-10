<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tags\Indexing;

use Lsa\Xsl\Core\Contracts\HasAuralFallback;
use Lsa\Xsl\Core\Contracts\HasVisualFallback;
use Lsa\Xsl\Core\Tags\Layout\Root;
use Lsa\Xsl\Core\Traits\ExtendedAuralConformance;
use Lsa\Xsl\Core\Traits\ExtendedVisualConformance;
use Lsa\Xsl\Core\Validation\Tags\IndexPageCitationRangeSeparator as W3IndexPageCitationRangeSeparator;
use Lsa\Xsl\Core\Xml\Tag;

/**
 * The fo:index-page-citation-range-separator formatting object specifies the formatting objects used to
 * separate two page numbers forming a range in the generated list of page numbers.
 *
 * Areas:
 * The fo:index-page-citation-range-separator formatting object does not directly produce any areas. Its
 * children will be retrieved and used by fo:index-page-citation-list when formatting the list of page
 * references.
 *
 * Constraints:
 * None.
 *
 * Contents:
 * (#PCDATA|%inline;)*
 *
 * @see https://www.w3.org/TR/xsl11/#fo_index-page-citation-range-separator
 */
class IndexPageCitationRangeSeparator extends Tag implements HasAuralFallback, HasVisualFallback
{
    use ExtendedAuralConformance;
    use ExtendedVisualConformance;
    use W3IndexPageCitationRangeSeparator;

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
