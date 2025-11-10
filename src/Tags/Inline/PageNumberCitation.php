<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tags\Inline;

use Lsa\Xsl\Core\Contracts\HasAuralFallback;
use Lsa\Xsl\Core\Contracts\HasVisualFallback;
use Lsa\Xsl\Core\Tags\Layout\Root;
use Lsa\Xsl\Core\Traits\ExtendedAuralConformance;
use Lsa\Xsl\Core\Traits\ExtendedVisualConformance;
use Lsa\Xsl\Core\Validation\Tags\PageNumberCitation as ValidatePageNumberCitation;
use Lsa\Xsl\Core\Xml\Tag;

/**
 * The fo:page-number-citation is used to reference the page-number for the page containing the first normal
 * area returned by the cited formatting object.
 *
 * Note:
 * It may be used to provide the page-numbers in the table of contents, cross-references, and index entries.
 *
 * Areas:
 * The fo:page-number-citation formatting object generates and returns a single normal inline-area.
 *
 * Constraints:
 * The cited page is the page containing, as a descendant, the first normal area returned by the formatting
 * object with an id trait matching the ref-id trait of the fo:page-number-citation (the referenced formatting
 * object).
 * The child areas of the generated inline-area are the same as the result of formatting the result-tree
 * fragment, defined in 6.6.10 fo:page-number, using the cited page as the reference-page, and the
 * fo:page-sequence that generated the cited-page as the reference-page-sequence.
 *
 * @see https://www.w3.org/TR/xsl11/#fo_page-number
 *
 * Contents:
 * EMPTY
 * @see https://www.w3.org/TR/xsl11/#fo_page-number-citation
 */
class PageNumberCitation extends Tag implements HasAuralFallback, HasVisualFallback
{
    use ExtendedAuralConformance;
    use ExtendedVisualConformance;
    use ValidatePageNumberCitation;

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
