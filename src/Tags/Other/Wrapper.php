<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tags\Other;

use Lsa\Xsl\Core\Traits\BasicAuralConformance;
use Lsa\Xsl\Core\Traits\BasicVisualConformance;
use Lsa\Xsl\Core\Validation\Tags\Wrapper as ValidateWrapper;
use Lsa\Xsl\Core\Xml\Tag;

/**
 * The fo:wrapper formatting object is used to specify inherited properties for a group of formatting objects.
 *
 * Areas:
 * The fo:wrapper formatting object returns the sequence of areas created by concatenating the sequences of
 * areas returned by each of the children of the fo:wrapper. If this sequence contains at least one normal
 * area, or if the "id" and "index-key" properties are not specified on the fo:wrapper, then the fo:wrapper
 * does not itself generate any areas.
 * If the sequence of areas returned to the fo:wrapper contains no normal areas, and the "id" or "index-key"
 * property is specified on the fo:wrapper, then it additionally generates and returns one normal area with
 * inline-progression-dimension and block-progression-dimension set to zero. This area is an inline-area
 * except where this would violate the constraint (on some ancestor area) that an area's children are all
 * block-areas or all inline-areas, but not a mixture. In that case the fo:wrapper must instead generate a
 * block-area.
 *
 * Trait Derivation:
 * Except for "id", "index-class", and "index-key", the fo:wrapper has no properties that are directly used by
 * it. However, it does serve as a carrier to hold inheritable properties that are utilized by its children.
 *
 * Constraints:
 * The order of concatenation of the sequences of areas returned by the children of the fo:wrapper is the same
 * order as the children are ordered under the fo:wrapper.
 *
 * Contents:
 * (#PCDATA|%inline;|%block;)*
 *
 * An fo:wrapper is only permitted to have children that would be permitted to be children of the parent of the
 * fo:wrapper, with two exceptions:
 * - An fo:wrapper may always have a sequence of zero or more fo:markers as its initial children.
 * - An fo:wrapper that is a child of an fo:multi-properties is only permitted to have children that would be
 *   permitted in place of the fo:multi-properties.
 * This restriction applies recursively.
 *
 * Note:
 * For example an fo:wrapper that is a child of another fo:wrapper may only have children that would be
 * permitted to be children of the parent fo:wrapper.
 *
 * @see https://www.w3.org/TR/xsl11/#fo_wrapper
 */
class Wrapper extends Tag
{
    use BasicAuralConformance;
    use BasicVisualConformance;
    use ValidateWrapper;
}
