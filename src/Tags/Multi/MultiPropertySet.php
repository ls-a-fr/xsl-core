<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tags\Multi;

use Lsa\Xsl\Core\Contracts\HasAuralFallback;
use Lsa\Xsl\Core\Contracts\HasVisualFallback;
use Lsa\Xsl\Core\Tags\Layout\Root;
use Lsa\Xsl\Core\Traits\ExtendedAuralConformance;
use Lsa\Xsl\Core\Traits\ExtendedVisualConformance;
use Lsa\Xsl\Core\Validation\Tags\MultiPropertySet as ValidateMultiPropertySet;
use Lsa\Xsl\Core\Xml\Tag;

/**
 * The fo:multi-property-set auxiliary formatting object is used to specify an alternative set of formatting
 * properties that can be used to provide an alternate presentation of the children flow objects of the
 * fo:wrapper child of the parent of this fo:multi-property-set.
 *
 * Areas:
 * The fo:multi-property-set formatting object does not generate or return any areas. It simply holds a set of
 * traits that may be accessed by expressions.
 *
 * Constraints:
 * None.
 *
 * Contents:
 * EMPTY
 *
 * @see https://www.w3.org/TR/xsl11/#fo_multi-property-set
 */
class MultiPropertySet extends Tag implements HasAuralFallback, HasVisualFallback
{
    use ExtendedAuralConformance;
    use ExtendedVisualConformance;
    use ValidateMultiPropertySet;

    public function getVisualFallback(Root $root): ?Tag
    {
        // Extended, need not be implemented for extended conformance for non-interactive media
        // Fallback for basic conformance and extended conformance for non-interactive media:
        // promote content to parent formatting object.
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
