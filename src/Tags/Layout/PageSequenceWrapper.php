<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tags\Layout;

use Lsa\Xsl\Core\Traits\BasicAuralConformance;
use Lsa\Xsl\Core\Traits\BasicVisualConformance;
use Lsa\Xsl\Core\Validation\Tags\PageSequenceWrapper as W3PageSequenceWrapper;
use Lsa\Xsl\Core\Xml\Tag;

/**
 * The fo:page-sequence-wrapper formatting object is used to specify inherited properties for a group of
 * fo:page-sequence formatting objects.
 *
 * Areas:
 * The fo:page-sequence-wrapper formatting object does not generate any areas. The fo:page-sequence-wrapper
 * formatting object returns the sequence of areas created by concatenating the sequences of areas returned by
 * each of the children of the fo:page-sequence-wrapper.
 *
 * Trait Derivation:
 * Except for "id", "index-class", and "index-key", the fo:page-sequence-wrapper has no properties that are
 * directly used by it. However, it does serve as a carrier to hold inheritable properties that are utilized
 * by its children.
 *
 * Constraints:
 * The order of concatenation of the sequences of areas returned by the children of the fo:page-sequence-wrapper
 * is the same order as the children are ordered under the fo:page-sequence-wrapper. An fo:page-sequence-wrapper
 * that contains no fo:page-sequence objects as descendants returns no areas.
 *
 * Note:
 * Because an fo:page-sequence-wrapper that contains no fo:page-sequence objects as descendants returns no
 * areas, any id, index-key, or index-class property on such an fo:page-sequence-wrapper is ignored; the result
 * would be as if they were not assigned on this FO. In particular, any attempt to refer to this id would
 * result in the same action as if this id were never declared within the FO result tree.
 *
 * Contents:
 * (page-sequence|page-sequence-wrapper)*
 *
 * @see https://www.w3.org/TR/xsl11/#fo_page-sequence-wrapper
 */
class PageSequenceWrapper extends Tag
{
    use BasicAuralConformance;
    use BasicVisualConformance;
    use W3PageSequenceWrapper;
}
