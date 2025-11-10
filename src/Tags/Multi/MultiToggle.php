<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tags\Multi;

use Lsa\Xsl\Core\Contracts\HasAuralFallback;
use Lsa\Xsl\Core\Contracts\HasVisualFallback;
use Lsa\Xsl\Core\Tags\Layout\Root;
use Lsa\Xsl\Core\Traits\ExtendedAuralConformance;
use Lsa\Xsl\Core\Traits\ExtendedVisualConformance;
use Lsa\Xsl\Core\Validation\Tags\MultiToggle as ValidateMultiToggle;
use Lsa\Xsl\Core\Xml\Tag;

/**
 * The fo:multi-toggle is typically used to establish an area that when actuated (for example implemented as
 * "clicked"), has the effect of switching from one fo:multi-case to another. The "switch-to" property value
 * of the fo:multi-toggle typically matches the "case-name" property value of the fo:multi-case to switch to.
 *
 * Areas:
 * The fo:multi-toggle formatting object does not generate any areas. The fo:multi-toggle formatting object
 * returns the sequence of areas created by concatenating the sequences of areas returned by each of the
 * children of the fo:multi-toggle. Each of the areas returned by the fo:multi-toggle has a switch-to trait
 * with the same value as on the returning fo:multi-toggle.
 *
 * Constraints:
 * The order of concatenation of the sequences of areas returned by the children of the fo:multi-toggle is the
 * same order as the children are ordered under the fo:multi-toggle.
 * Activating an area returned by an fo:multi-toggle causes a change to the value of the
 * currently-visible-multi-case of the closest ancestor fo:multi-switch. (See 7.23.11 switch-to for how the
 * switch-to value selects an fo:multi-case.)
 *
 * @see \Lsa\Xsl\Core\Validation\Types\SwitchToType
 *
 * Contents:
 * (#PCDATA|%inline;|%block;)*
 *
 * An fo:multi-toggle is only permitted as a descendant of an fo:multi-case.
 * @see https://www.w3.org/TR/xsl11/#fo_multi-toggle
 */
class MultiToggle extends Tag implements HasAuralFallback, HasVisualFallback
{
    use ExtendedAuralConformance;
    use ExtendedVisualConformance;
    use ValidateMultiToggle;

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
