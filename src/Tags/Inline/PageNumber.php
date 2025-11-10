<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tags\Inline;

use Lsa\Xsl\Core\Contracts\HasAuralFallback;
use Lsa\Xsl\Core\Tags\Layout\Root;
use Lsa\Xsl\Core\Traits\BasicVisualConformance;
use Lsa\Xsl\Core\Traits\ExtendedAuralConformance;
use Lsa\Xsl\Core\Validation\Tags\PageNumber as ValidatePageNumber;
use Lsa\Xsl\Core\Xml\Tag;

/**
 * The fo:page-number formatting object is used to obtain an inline-area whose content is the page-number for
 * the page on which the inline-area is placed.
 *
 * Areas:
 * The fo:page-number formatting object generates and returns a single normal inline-area.
 *
 * Constraints:
 * The content of the inline-area depends on the reference-page and the reference-page-sequence. For the
 * fo:page-number the reference-page is the page on which the inline-area is placed and the
 * reference-page-sequence is the ancestor fo:page-sequence of the fo:page-number.
 * The child areas of this inline-area are the same as the result of formatting a result-tree fragment
 * consisting of the content of any fo:folio-prefix child of the reference-page-sequence, followed by
 * fo:character flow objects; one for each character in the folio-number string and with only the "character"
 * property specified, followed by the content of any fo:folio-suffix child of the reference-page-sequence.
 * The folio-number string is obtained by converting the folio-number for the reference-page in accordance with
 * the number to string conversion properties of the reference-page-sequence.
 *
 * Note:
 * The conversion properties are: 7.26.1 format, 7.26.2 grouping-separator, 7.26.3 grouping-size,
 * 7.26.4 letter-value, 7.10.1 country, and 7.10.2 language.
 *
 * @see \Lsa\Xsl\Core\Validation\Properties\Format `format`
 * @see \Lsa\Xsl\Core\Validation\Properties\GroupingSeparator `grouping-separator`
 * @see \Lsa\Xsl\Core\Validation\Properties\GroupingSize `grouping-size`
 * @see \Lsa\Xsl\Core\Validation\Properties\LetterValue `letter-value`
 * @see \Lsa\Xsl\Core\Validation\Properties\Country `country`
 * @see \Lsa\Xsl\Core\Validation\Properties\Language `language`
 *
 * Contents:
 * EMPTY
 * @see https://www.w3.org/TR/xsl11/#fo_page-number
 */
class PageNumber extends Tag implements HasAuralFallback
{
    use BasicVisualConformance;
    use ExtendedAuralConformance;
    use ValidatePageNumber;

    public function getAuralFallback(Root $root): ?Tag
    {
        // Fallback: speak an indication that content cannot be correctly spoken.
        return new Inline('This content cannot be correctly spoken');
    }
}
