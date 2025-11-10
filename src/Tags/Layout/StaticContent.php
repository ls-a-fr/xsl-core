<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tags\Layout;

use Lsa\Xsl\Core\Contracts\HasAuralFallback;
use Lsa\Xsl\Core\Contracts\HasVisualFallback;
use Lsa\Xsl\Core\Traits\ExtendedAuralConformance;
use Lsa\Xsl\Core\Traits\ExtendedVisualConformance;
use Lsa\Xsl\Core\Validation\Tags\StaticContent as ValidateStaticContent;
use Lsa\Xsl\Core\Xml\Tag;

/**
 * The fo:static-content formatting object holds a sequence or a tree of formatting objects that is to be
 * presented in a single region or repeated in like-named regions on one or more pages in the page-sequence.
 * Its common use is for repeating or running headers and footers.
 *
 * This content is repeated, in its entirety, on every page to which it is assigned.
 *
 * Areas:
 * The fo:static-content formatting object does not generate any areas. The fo:static-content formatting
 * object returns the sequence of areas created by concatenating the sequences of areas returned by each of
 * the children of the fo:static-content. The order of concatenation is the same order as the children are
 * ordered under the fo:static-content.
 *
 * Constraints:
 * The flow-map determines the assignment of the content of the fo:static-content to a region.
 * The fo:static-content may be processed multiple times and thus the default ordering constraint of
 * section 4.7.1 General Ordering Constraints does not apply to the fo:static-content. Instead, it must
 * satisfy the constraint on a per-page basis. Specifically, if P is a page-reference-area, C is an
 * area-class, and S is the set of all descendants of P of area-class C returned to the fo:static-content
 * descendant, then S must be properly ordered.
 *
 * @see https://www.w3.org/TR/xsl11/#area-genorder
 *
 * Contents:
 * (%block;)+
 * @see https://www.w3.org/TR/xsl11/#fo_static-content
 */
class StaticContent extends Tag implements HasAuralFallback, HasVisualFallback
{
    use ExtendedAuralConformance;
    use ExtendedVisualConformance;
    use ValidateStaticContent;

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
