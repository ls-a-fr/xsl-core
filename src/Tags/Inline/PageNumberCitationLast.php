<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tags\Inline;

use Lsa\Xsl\Core\Contracts\HasAuralFallback;
use Lsa\Xsl\Core\Contracts\HasVisualFallback;
use Lsa\Xsl\Core\Tags\Layout\Root;
use Lsa\Xsl\Core\Traits\ExtendedAuralConformance;
use Lsa\Xsl\Core\Traits\ExtendedVisualConformance;
use Lsa\Xsl\Core\Validation\Tags\PageNumberCitationLast as W3PageNumberCitationLast;
use Lsa\Xsl\Core\Xml\Tag;

/**
 * The fo:page-number-citation-last is used to reference the page-number for the last page containing an area
 * that is (a) returned by the cited formatting object and (b) has an area-class that is consistent with the
 * specified page-citation-strategy.
 *
 * Note:
 * It may be used to provide the page-numbers in the table of contents, cross-references, and, when combined
 * with fo:page-number-citation, for page range entries.
 *
 * Areas:
 * The fo:page-number-citation-last formatting object generates and returns a single normal inline-area.
 *
 * Constraints:
 * The cited page is the page of the last page area (in the pre-order traversal order of the area tree) that
 * satisfies the constraints of the page-citation-strategy on this fo:page-number-citation-last.
 * The child areas of the generated inline-area are the same as the result of formatting the result-tree
 * fragment, defined in 6.6.10 fo:page-number, using the cited page as the reference-page, and the
 * fo:page-sequence that generated the cited-page as the reference-page-sequence.
 *
 * Contents:
 * EMPTY
 *
 * @see https://www.w3.org/TR/xsl11/#fo_page-number-citation-last
 */
class PageNumberCitationLast extends Tag implements HasAuralFallback, HasVisualFallback
{
    use ExtendedAuralConformance;
    use ExtendedVisualConformance;
    use W3PageNumberCitationLast;

    public function getVisualFallback(Root $root): ?Tag
    {
        // Fallback: display an indication that content cannot be correctly rendered.
        return new Inline('This content cannot be correctly rendered');
    }

    public function getAuralFallback(Root $root): ?Tag
    {
        // Fallback: speak an indication that content cannot be correctly spoken.
        return new Inline('This content cannot be correctly spoken');
    }
}
