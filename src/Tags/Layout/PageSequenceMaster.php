<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tags\Layout;

use Lsa\Xsl\Core\Traits\BasicAuralConformance;
use Lsa\Xsl\Core\Traits\BasicVisualConformance;
use Lsa\Xsl\Core\Validation\Tags\PageSequenceMaster as ValidatePageSequenceMaster;
use Lsa\Xsl\Core\Xml\Tag;

/**
 * The fo:page-sequence-master is used to specify the constraints on and the order in which a given set of
 * page-masters will be used in generating a sequence of pages. Pages are automatically generated when the
 * fo:page-sequence-master is used in formatting an fo:page-sequence.
 *
 * Note:
 * There are several ways of specifying a potential sequence of pages. One can specify a sequence of references
 * to particular page-masters. This yields a bounded sequence of potential pages. Alternatively, one can
 * specify a repeating sub-sequence of one or more page-masters. This sub-sequence can be bounded or unbounded.
 * Finally one can intermix the two kinds of sub-sequence-specifiers.
 *
 * Areas:
 * The fo:page-sequence-master formatting object generates no area directly. It is used by the fo:page-sequence
 * formatting object to generate pages.
 *
 * Constraints:
 * The children of the fo:page-sequence-master are a sequence of sub-sequence-specifiers. A page-sequence
 * satisfies the constraint determined by an fo:page-sequence-master if (a) it can be partitioned into a
 * sequence of sub-sequences of pages that map one-to-one to an initial sub-sequence of the sequence of
 * sub-sequence-specifiers that are the children of the fo:page-sequence-master and, (b) for each sub-sequence
 * of pages in the partition, that sub-sequence satisfies the constraints of the corresponding
 * sub-sequence-specifier. The sequence of sub-sequences of pages can be shorter than the sequence of
 * sub-sequence-specifiers.
 *
 * It is an error if the entire sequence of sub-sequence-specifiers children is exhausted while some areas
 * returned by an fo:flow are not placed. Implementations may recover, if possible, by re-using the
 * sub-sequence-specifier that was last used to generate a page.
 *
 * Contents:
 * (single-page-master-reference|repeatable-page-master-reference|repeatable-page-master-alternatives)+
 *
 * @see https://www.w3.org/TR/xsl11/#fo_page-sequence-master
 */
class PageSequenceMaster extends Tag
{
    use BasicAuralConformance;
    use BasicVisualConformance;
    use ValidatePageSequenceMaster;
}
