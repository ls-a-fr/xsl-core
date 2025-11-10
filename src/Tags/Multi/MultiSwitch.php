<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tags\Multi;

use Lsa\Xsl\Core\Contracts\HasAuralFallback;
use Lsa\Xsl\Core\Contracts\HasVisualFallback;
use Lsa\Xsl\Core\Tags\Layout\Root;
use Lsa\Xsl\Core\Traits\ExtendedAuralConformance;
use Lsa\Xsl\Core\Traits\ExtendedVisualConformance;
use Lsa\Xsl\Core\Validation\Tags\MultiSwitch as ValidateMultiSwitch;
use Lsa\Xsl\Core\Xml\Tag;
use RuntimeException;

/**
 * The fo:multi-switch wraps the specification of alternative sub-trees of formatting objects (each sub-tree
 * being within an fo:multi-case), and controls the switching (activated via fo:multi-toggle) from one
 * alternative to another.
 *
 * The direct children of an fo:multi-switch object are fo:multi-case objects. Only a single fo:multi-case may
 * be visible at a single time. The user may switch between the available multi-cases.
 * Each fo:multi-case may contain one or more fo:multi-toggle objects, which controls the fo:multi-case
 * switching of the fo:multi-switch.
 *
 * Note:
 * An fo:multi-switch can be used for many interactive tasks, such as table-of-content views, embedding link
 * targets, or generalized (even multi-layered hierarchical), next/previous views. The latter are today
 * normally handled in HTML by next/previous links to other documents, forcing the whole document to be
 * replaced whenever the users decides to move on.
 *
 * Areas:
 * The fo:multi-switch formatting object does not generate any areas. The fo:multi-switch formatting object
 * returns the sequence of areas returned by the currently visible fo:multi-case. If there is no currently
 * visible fo:multi-case no areas are returned.
 *
 * Trait Derivation:
 * The currently-visible-multi-case trait has as its initial value a reference to the first fo:multi-case
 * child that has a value of "show" of the starting-state trait. If there is no such child, it has a value
 * indicating that there is no currently visible fo:multi-case. When an fo:multi-toggle is actuated, its
 * closest ancestral fo:multi-switch's currently-visible-multi-case trait value changes to refer to the
 * fo:multi-case selected by the "switch-to" property value of the fo:multi-toggle. Once the
 * currently-visible-multi-case trait gets a value indicating that there is no currently visible
 * fo:multi-case, it becomes impossible to actuate an fo:multi-toggle in this fo:multi-switch.
 *
 * Constraints:
 * The order of the sequence of areas returned by the fo:multi-switch is the same as the order of the areas
 * returned by the currently visible fo:multi-case.
 *
 * Note:
 * Any number of the fo:multi-case objects may assign "starting-state" to "show".
 *
 * If no fo:multi-case has "starting-state" property value of "show", the contents of no fo:multi-case should
 * be displayed.
 *
 * Note:
 * If no multi-case is displayed, the entire fo:multi-switch will effectively be hidden.
 *
 * Contents:
 * (multi-case+)
 *
 * @see https://www.w3.org/TR/xsl11/#fo_multi-switch
 */
class MultiSwitch extends Tag implements HasAuralFallback, HasVisualFallback
{
    use ExtendedAuralConformance;
    use ExtendedVisualConformance;
    use ValidateMultiSwitch;

    public function getVisualFallback(Root $root): ?Tag
    {
        // Need not be implemented for extended conformance for non-interactive media
        // Fallback for basic conformance and extended conformance for non-interactive media:
        // utilize the contents of the first eligible multi-case formatting object.
        $tag = $this->ancestor(self::class);

        if (($tag instanceof Tag) === false) {
            throw new RuntimeException('An error occured while gathering the first eligible multi-case');
        }

        return $tag;
    }

    public function getAuralFallback(Root $root): ?Tag
    {
        // Fallback: utilize the contents of the first eligible multi-case formatting object.
        $tag = $this->ancestor(self::class);

        if (($tag instanceof Tag) === false) {
            throw new RuntimeException('An error occured while gathering the first eligible multi-case');
        }

        return $tag;
    }
}
