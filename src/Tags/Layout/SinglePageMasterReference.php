<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tags\Layout;

use Lsa\Xsl\Core\Traits\BasicAuralConformance;
use Lsa\Xsl\Core\Traits\BasicVisualConformance;
use Lsa\Xsl\Core\Validation\Tags\SinglePageMasterReference as ValidateSinglePageMasterReference;
use Lsa\Xsl\Core\Xml\Tag;

/**
 * An fo:single-page-master-reference is the simplest sub-sequence-specifier. It specifies a sub-sequence
 * consisting of a single instance of a single page-master. It is used to specify the use of a particular
 * page-master at a given point in the sequence of pages that would be generated using the
 * fo:page-sequence-master that is the parent of the fo:single-page-master-reference.
 *
 * Areas:
 * The fo:single-page-master-reference formatting object generates no area directly. It is used by the
 * fo:page-sequence formatting object to generate pages.
 *
 * Constraints:
 * The fo:single-page-master-reference has a reference to the fo:simple-page-master which has the same
 * master-name as the master-reference trait on the fo:single-page-master-reference.
 * The sub-sequence of pages mapped to this sub-sequence-specifier satisfies the constraints of this
 * sub-sequence-specifier if (a) the sub-sequence of pages consists of a single page and (b) that page is
 * constrained to have been generated using the fo:simple-page-master referenced by the
 * fo:single-page-master-reference.
 *
 * Contents:
 * EMPTY
 *
 * @see https://www.w3.org/TR/xsl11/#fo_single-page-master-reference
 */
class SinglePageMasterReference extends Tag
{
    use BasicAuralConformance;
    use BasicVisualConformance;
    use ValidateSinglePageMasterReference;
}
