<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tags\Multi;

use Lsa\Xsl\Core\Traits\BasicAuralConformance;
use Lsa\Xsl\Core\Traits\BasicVisualConformance;
use Lsa\Xsl\Core\Validation\Tags\MultiCase as ValidateMultiCase;
use Lsa\Xsl\Core\Xml\Tag;

/**
 * The fo:multi-case is used to contain (within an fo:multi-switch) each alternative sub-tree of formatting
 * objects among which the parent fo:multi-switch will choose one to show and will hide the rest.
 *
 * Areas:
 * The fo:multi-case formatting object does not generate any areas. The fo:multi-case formatting object returns
 * the sequence of areas created by concatenating the sequences of areas returned by each of the children of
 * the fo:multi-case.
 *
 * Constraints:
 * The order of concatenation of the sequences of areas returned by the children of the fo:multi-case is the
 * same order as the children are ordered under the fo:multi-case.
 *
 * Contents:
 * (#PCDATA|%inline;|%block;)*
 *
 * An fo:multi-case is only permitted to have children that would be permitted to be children of the parent of
 * the fo:multi-switch that is the parent of the fo:multi-case, except that an fo:multi-case may not contain
 * fo:marker children. In particular, it can contain fo:multi-toggle objects (at any depth), which controls the
 * fo:multi-case switching.
 * This restriction applies recursively.
 *
 * Note:
 * For example, an fo:multi-case whose parent fo:multi-switch is a child of another fo:multi-case may only have
 * children that would be permitted in place of the outer fo:multi-case's parent fo:multi-switch.
 *
 * @see https://www.w3.org/TR/xsl11/#fo_multi-case
 */
class MultiCase extends Tag
{
    // Basic: needed as wrapper for fallback for multi-switch
    use BasicAuralConformance;
    use BasicVisualConformance;
    use ValidateMultiCase;
}
