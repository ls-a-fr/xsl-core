<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tags\Layout;

use Lsa\Xsl\Core\Contracts\HasAuralFallback;
use Lsa\Xsl\Core\Contracts\HasVisualFallback;
use Lsa\Xsl\Core\Traits\ExtendedAuralConformance;
use Lsa\Xsl\Core\Traits\ExtendedVisualConformance;
use Lsa\Xsl\Core\Validation\Tags\RepeatablePageMasterAlternatives as ValidateRepeatablePageMasterAlternatives;
use Lsa\Xsl\Core\Xml\Tag;

/**
 * The fo:repeatable-page-master-alternatives formatting object is the most complex sub-sequence-specifier. It
 * specifies a sub-sequence consisting of repeated instances of a set of alternative page-masters. The number
 * of repetitions may be bounded or potentially unbounded. Which of the alternative page-masters is used at any
 * point in the sequence depends on the evaluation of a condition on the use of the alternative. Typical
 * conditions include, testing whether the page which is generated using the alternative is the first or last
 * page in a page-sequence or is the page blank. The full set of conditions allows different page-masters to be
 * used for the first page, for odd and even pages, for blank pages, etc.
 *
 * Note:
 * Because the conditions are tested in order from the beginning of the sequence of children, the last
 * alternative in the sequence usually has a condition that is always true and this alternative references the
 * page-master that is used for all pages that do not receive some specialized layout.
 *
 * Areas:
 * The fo:repeatable-page-master-alternatives formatting object generates no area directly. This formatting
 * object is used by the fo:page-sequence formatting object to generate pages.
 *
 * Constraints:
 * The children of the fo:repeatable-page-master-alternatives are fo:conditional-page-master-references. These
 * children are called alternatives.
 * The sub-sequence of pages mapped to this sub-sequence-specifier satisfies the constraints of this
 * sub-sequence-specifier if (a) the sub-sequence of pages consists of zero or more pages, (b) each page is
 * generated using the fo:simple-page-master referenced by the one of the alternatives that are the children of
 * the fo:repeatable-page-master-alternatives, (c) the conditions on that alternative are true, (d) that
 * alternative is the first alternative in the sequence of children for which all the conditions are true, and
 * (e) the length of the sub-sequence is less than or equal to the value of maximum-repeats.
 *
 * Contents:
 * (conditional-page-master-reference+)
 *
 * @see https://www.w3.org/TR/xsl11/#fo_repeatable-page-master-alternatives
 */
class RepeatablePageMasterAlternatives extends Tag implements HasAuralFallback, HasVisualFallback
{
    use ExtendedAuralConformance;
    use ExtendedVisualConformance;
    use ValidateRepeatablePageMasterAlternatives;

    public function getVisualFallback(Root $root): ?Tag
    {
        /**
         * Find a SimplePageMaster in document
         *
         * @var \Lsa\Xsl\Core\Tags\Layout\SimplePageMaster|null
         */
        return $root->xpath('//conditional-page-master-reference[0]/page-master')->first();
    }

    public function getAuralFallback(Root $root): ?Tag
    {
        /**
         * Find a SimplePageMaster in document
         *
         * @var \Lsa\Xsl\Core\Tags\Layout\SimplePageMaster|null
         */
        return $root->xpath('//conditional-page-master-reference[0]/page-master')->first();
    }
}
