<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tags\Layout;

use Lsa\Xsl\Core\Traits\BasicAuralConformance;
use Lsa\Xsl\Core\Traits\BasicVisualConformance;
use Lsa\Xsl\Core\Validation\Tags\RepeatablePageMasterReference as ValidateRepeatablePageMasterReference;
use Lsa\Xsl\Core\Xml\Tag;

/**
 * An fo:repeatable-page-master-reference is the next simplest sub-sequence-specifier. It specifies a
 * sub-sequence consisting of repeated instances of a single page-master. The number of repetitions may be
 * bounded or potentially unbounded.
 *
 * Areas:
 * The fo:repeatable-page-master-reference formatting object generates no area directly. It is used by the
 * fo:page-sequence formatting object to generate pages.
 *
 * Constraints:
 * The fo:repeatable-page-master-reference has a reference to the fo:simple-page-master which has the same
 * master-name as the master-reference trait on the fo:repeatable-page-master-reference.
 * The sub-sequence of pages mapped to this sub-sequence-specifier satisfies the constraints of this
 * sub-sequence-specifier if (a) the sub-sequence of pages consists of zero or more pages, (b) each page is
 * generated using the fo:simple-page-master referenced by the fo:repeatable-page-master-reference, and
 * (c) length of the sub-sequence is less than or equal to the value of maximum-repeats.
 * If no region-master child of the page-master referred to by this formatting object has a region-name
 * associated to any flow in an fo:page-sequence, then the sub-sequence is constrained to have length zero.
 *
 * Contents:
 * EMPTY
 *
 * @see https://www.w3.org/TR/xsl11/#fo_repeatable-page-master-reference
 */
class RepeatablePageMasterReference extends Tag
{
    use BasicAuralConformance;
    use BasicVisualConformance;
    use ValidateRepeatablePageMasterReference;
}
