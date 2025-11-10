<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tags\Link;

use Lsa\Xsl\Core\Contracts\HasAuralFallback;
use Lsa\Xsl\Core\Contracts\HasVisualFallback;
use Lsa\Xsl\Core\Tags\Layout\Root;
use Lsa\Xsl\Core\Traits\ExtendedAuralConformance;
use Lsa\Xsl\Core\Traits\ExtendedVisualConformance;
use Lsa\Xsl\Core\Validation\Tags\BasicLink as ValidateBasicLink;
use Lsa\Xsl\Core\Xml\Tag;

/**
 * The fo:basic-link is used for representing the start resource of a simple one-directional single-target
 * link. The object allows for traversal to the destination resource, typically by clicking on any of the
 * containing areas.
 *
 * Areas:
 * The fo:basic-link formatting object generates one or more normal inline-areas. The fo:basic-link returns
 * these areas, together with any normal block-areas, page-level-out-of-line areas, and
 * reference-level-out-of-line areas returned by the children of the fo:basic-link.
 *
 * Note:
 * An fo:basic-link can be enclosed in an fo:block to create a display area.
 *
 * Constraints:
 * One of the external-destination and internal-destination properties should be specified. If both are
 * specified, the system may either report it as an error, or use the internal-destination property.
 * No area may have more than one normal child area returned by the same fo:basic-link formatting object.
 * The children of each normal area returned by an fo:basic-link must satisfy the constraints specified in
 * 4.7.3 Inline-building.
 *
 * @see https://www.w3.org/TR/xsl11/#area-inlinebuild
 *
 * Contents:
 * (#PCDATA|%inline;|%block;)*
 *
 * In addition this formatting object may have a sequence of zero or more fo:markers as its initial children.
 * @see https://www.w3.org/TR/xsl11/#fo_basic-link
 */
class BasicLink extends Tag implements HasAuralFallback, HasVisualFallback
{
    use ExtendedAuralConformance;
    use ExtendedVisualConformance;
    use ValidateBasicLink;

    public function getVisualFallback(Root $root): ?Tag
    {
        // Fallback: promote content to parent formatting object.
        $this->fallback();

        return null;
    }

    public function getAuralFallback(Root $root): ?Tag
    {
        // Fallback: promote content to parent formatting object.
        $this->fallback();

        return null;
    }

    /**
     * Common fallback management
     * Moves every child to the parent node and make this node unrenderable
     */
    private function fallback(): void
    {
        $parent = $this->parent();
        if ($parent === null) {
            return;
        }
        $parent->children($this->getChildren());
        $this->markAsUnrenderable();
    }
}
