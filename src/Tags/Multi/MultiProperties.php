<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tags\Multi;

use Lsa\Xsl\Core\Contracts\HasAuralFallback;
use Lsa\Xsl\Core\Contracts\HasVisualFallback;
use Lsa\Xsl\Core\Tags\Layout\Root;
use Lsa\Xsl\Core\Traits\ExtendedAuralConformance;
use Lsa\Xsl\Core\Traits\ExtendedVisualConformance;
use Lsa\Xsl\Core\Validation\Tags\MultiProperties as ValidateMultiProperties;
use Lsa\Xsl\Core\Xml\Tag;

/**
 * The fo:multi-properties is used to switch between two or more property sets that are associated with a given
 * portion of content.
 *
 * Note:
 * An fo:multi-properties formatting object can be used to give different appearances to a given portion of
 * content. For example, when a link changes from the not-yet-visited state to the visited-state, this could
 * change the set of properties that would be used to format the content. Designers should be careful in
 * choosing which properties they change, because many property changes could cause reflowing of the text which
 * may not be desired in many circumstances. Changing properties such as "color" or "text-decoration" should
 * not require re-flowing the text.
 *
 * The direct children of an fo:multi-properties formatting object is an ordered set of fo:multi-property-set
 * formatting objects followed by a single fo:wrapper formatting object. The properties, specified on the
 * fo:wrapper, that have been specified with a value of "merge-property-values()" will take a value that is a
 * merger of the value on the fo:multi-properties and the specified values on the fo:multi-property-set
 * formatting objects that apply.
 *
 * Areas:
 * The fo:multi-properties formatting object does not generate any areas. The fo:multi-properties formatting
 * object returns the sequence of areas created by concatenating the sequences of areas returned by each of
 * the children of the fo:multi-properties.
 *
 * Constraints:
 * The order of concatenation of the sequences of areas returned by the children of the fo:multi-properties is
 * the same order as the children are ordered under the fo:multi-properties.
 *
 * Contents:
 * (multi-property-set+,wrapper)
 *
 * The properties that should take a merged value shall be specified with a value of "merge-property-values()".
 * This function, when applied on an fo:wrapper that is a direct child of an fo:multi-properties, merges the
 * applicable property definitions on the fo:multi-property-set siblings.
 *
 * @see https://www.w3.org/TR/xsl11/#fo_multi-properties
 */
class MultiProperties extends Tag implements HasAuralFallback, HasVisualFallback
{
    use ExtendedAuralConformance;
    use ExtendedVisualConformance;
    use ValidateMultiProperties;

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
