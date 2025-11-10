<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tags\Inline;

use Lsa\Xsl\Core\Contracts\HasAuralFallback;
use Lsa\Xsl\Core\Contracts\HasVisualFallback;
use Lsa\Xsl\Core\Tags\Layout\Root;
use Lsa\Xsl\Core\Traits\ExtendedAuralConformance;
use Lsa\Xsl\Core\Traits\ExtendedVisualConformance;
use Lsa\Xsl\Core\Validation\Tags\FolioSuffix as W3FolioSuffix;
use Lsa\Xsl\Core\Xml\Tag;

/**
 * The fo:folio-suffix formatting object specifies a static suffix for the folio numbers within a page-sequence.
 *
 * Areas:
 * The fo:folio-suffix formatting object does not directly produce any areas. Its children will be retrieved and
 * used when formatting page numbers.
 *
 * Constraints:
 * None.
 *
 * Contents:
 * (#PCDATA|%inline;)*
 *
 * An fo:folio-suffix is not permitted to have an fo:page-number, fo:page-number-citation, or
 * fo:page-number-citation-last as a descendant.
 *
 * @see https://www.w3.org/TR/xsl11/#fo_folio-suffix
 */
class FolioSuffix extends Tag implements HasAuralFallback, HasVisualFallback
{
    use ExtendedAuralConformance;
    use ExtendedVisualConformance;
    use W3FolioSuffix;

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
