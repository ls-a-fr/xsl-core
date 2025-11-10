<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tags\Indexing;

use Lsa\Xsl\Core\Contracts\HasAuralFallback;
use Lsa\Xsl\Core\Contracts\HasVisualFallback;
use Lsa\Xsl\Core\Tags\Layout\Root;
use Lsa\Xsl\Core\Traits\ExtendedAuralConformance;
use Lsa\Xsl\Core\Traits\ExtendedVisualConformance;
use Lsa\Xsl\Core\Validation\Tags\IndexPageCitationListSeparator as W3IndexPageCitationListSeparator;
use Lsa\Xsl\Core\Xml\Tag;

/**
 * The fo:index-page-citation-list-separator formatting object specifies the formatting objects used to
 * separate singleton page numbers or page number ranges in the generated list of page numbers.
 *
 * Areas:
 * The fo:index-page-citation-list-separator formatting object does not directly produce any areas. Its
 * children will be retrieved and used by fo:index-page-citation-list when formatting the list of page
 * references.
 *
 * Constraints:
 * None.
 *
 * Contents:
 * (#PCDATA|%inline;)*
 *
 * @see https://www.w3.org/TR/xsl11/#fo_index-page-citation-list-separator
 */
class IndexPageCitationListSeparator extends Tag implements HasAuralFallback, HasVisualFallback
{
    use ExtendedAuralConformance;
    use ExtendedVisualConformance;
    use W3IndexPageCitationListSeparator;

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
