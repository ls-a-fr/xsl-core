<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tags\Layout;

use Lsa\Xsl\Core\Contracts\HasAuralFallback;
use Lsa\Xsl\Core\Contracts\HasVisualFallback;
use Lsa\Xsl\Core\Traits\ExtendedAuralConformance;
use Lsa\Xsl\Core\Traits\ExtendedVisualConformance;
use Lsa\Xsl\Core\Validation\Tags\Title as ValidateTitle;
use Lsa\Xsl\Core\Xml\Tag;

/**
 *  The fo:title formatting object is used to associate a title with a given page-sequence. This title may be
 * used by an interactive User Agent to identify the pages. For example, the content of the fo:title can be
 * formatted and displayed in a "title" window or in a "tool tip".
 *
 * Areas:
 * This formatting object returns the sequence of areas returned by the children of this formatting object.
 *
 * Constraints:
 * The sequence of returned areas must be the concatenation of the sub-sequences of areas returned by each of
 * the flow children of the fo:title formatting object in the order in which the children occur.
 *
 * Contents:
 * (#PCDATA|%inline;)*
 *
 * An fo:title is not permitted to have an fo:float, fo:footnote or fo:marker as a descendant.
 * Additionally, an fo:title is not permitted to have as a descendant an fo:block-container that generates an
 * absolutely positioned area.
 *
 * @see https://www.w3.org/TR/xsl11/#fo_title
 */
class Title extends Tag implements HasAuralFallback, HasVisualFallback
{
    use ExtendedAuralConformance;
    use ExtendedVisualConformance;
    use ValidateTitle;

    public function getVisualFallback(Root $root): ?Tag
    {
        $this->fallback($root);

        return null;
    }

    public function getAuralFallback(Root $root): ?Tag
    {
        $this->fallback($root);

        return null;
    }

    private function fallback(Root $root): void
    {
        // Fallback: include after content of body region is placed
        /**
         * An XSL-FO document must have a region body
         *
         * @var \Lsa\Xsl\Core\Tags\Layout\RegionBody
         */
        $body = $root->xpath('//region-body')->first();
        $body->children($this->getChildren());
        $this->markAsUnrenderable();
    }
}
