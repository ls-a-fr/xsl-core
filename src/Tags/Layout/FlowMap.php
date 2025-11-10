<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tags\Layout;

use Lsa\Xsl\Core\Contracts\HasAuralFallback;
use Lsa\Xsl\Core\Contracts\HasVisualFallback;
use Lsa\Xsl\Core\Tags\Inline\Inline;
use Lsa\Xsl\Core\Traits\ExtendedAuralConformance;
use Lsa\Xsl\Core\Traits\ExtendedVisualConformance;
use Lsa\Xsl\Core\Validation\Tags\FlowMap as W3FlowMap;
use Lsa\Xsl\Core\Xml\Tag;

/**
 * The fo:flow-map is used to specify the assignment of flows to regions.
 *
 * Areas:
 * The fo:flow-map formatting object generates no area directly. It is used by the fo:page-sequence formatting
 * object to assign flows to regions.
 *
 * Each fo:flow-assignment child of the fo:flow map defines a source list and a target list. The source list is
 * a sequence of flow names whose corresponding fo:flow objects (in the referring fo:page-sequence) are treated
 * as a single fo:flow for composition purposes. The target list is a sequence of region-names which identify
 * the region or regions on each page which are used for the source content.
 *
 * Note:
 * This is independent of the actual sequence of pages, which is generated as it has always been generated
 * using the fo:simple-page-master, and fo:page-sequence-master objects referred to by the master-reference
 * property of the fo:page-sequence.
 *
 * For each fo:flow-assignment child of the fo:flow-map, having an fo:flow-source-list child S and an
 * fo:flow-target-list child T, we say that the fo:flow-map assigns each of the flows referenced by the
 * fo:flow-name-specifier children of S to the regions referenced by the fo:region-name-specifier children of T.
 *
 * Constraints:
 * Many of the constraints that a flow-map induces are expressed in 6.4.5 fo:page-sequence.
 * The children of the fo:flow-map are fo:flow-assignment objects containing parallel constraints for assigning
 * flows to regions. It is an error for a flow-name to appear in the source list of more than one
 * fo:flow-assignment child of a given fo:flow-map. It is also an error for a region-name to appear in the
 * target list of more than one fo:flow-assignment child of a given fo:flow-map.
 *
 * @see https://www.w3.org/TR/xsl11/#fo_page-sequence
 *
 * Implicit flow-map:
 * ```xml
 * <fo:flow-map>
 *   <fo:flow-assignment>
 *     <fo:flow-source-list>
 *       <fo:flow-name-specifier
 *         flow-name-reference="xsl-region-body"/>
 *     </fo:flow-source-list>
 *     <fo:flow-target-list>
 *       <fo:region-name-specifier
 *         region-name-reference="xsl-region-body"/>
 *     </fo:flow-target-list>
 *   </fo:flow-assignment>
 *   <fo:flow-assignment>
 *     <fo:flow-source-list>
 *       <fo:flow-name-specifier
 *         flow-name-reference="xsl-region-before"/>
 *     </fo:flow-source-list>
 *     <fo:flow-target-list>
 *       <fo:region-name-specifier
 *         region-name-reference="xsl-region-before"/>
 *     </fo:flow-target-list>
 *   </fo:flow-assignment>
 *   <fo:flow-assignment>
 *     <fo:flow-source-list>
 *       <fo:flow-name-specifier
 *         flow-name-reference="xsl-region-after"/>
 *     </fo:flow-source-list>
 *     <fo:flow-target-list>
 *       <fo:region-name-specifier
 *         region-name-reference="xsl-region-after"/>
 *     </fo:flow-target-list>
 *   </fo:flow-assignment>
 *   <fo:flow-assignment>
 *     <fo:flow-source-list>
 *       <fo:flow-name-specifier
 *         flow-name-reference="xsl-region-start"/>
 *     </fo:flow-source-list>
 *     <fo:flow-target-list>
 *       <fo:region-name-specifier
 *         region-name-reference="xsl-region-start"/>
 *     </fo:flow-target-list>
 *   </fo:flow-assignment>
 *   <fo:flow-assignment>
 *     <fo:flow-source-list>
 *       <fo:flow-name-specifier
 *         flow-name-reference="xsl-region-end"/>
 *     </fo:flow-source-list>
 *     <fo:flow-target-list>
 *       <fo:region-name-specifier
 *         region-name-reference="xsl-region-end"/>
 *      </fo:flow-target-list>
 *   </fo:flow-assignment>
 * </fo:flow-map>
 * ```
 *
 * Contents:
 * (flow-assignment+)
 * @see https://www.w3.org/TR/xsl11/#fo_flow-map
 */
class FlowMap extends Tag implements HasAuralFallback, HasVisualFallback
{
    use ExtendedAuralConformance;
    use ExtendedVisualConformance;
    use W3FlowMap;

    public function getVisualFallback(Root $root): ?Tag
    {
        // Fallback: display an indication that content cannot be correctly rendered.
        return new Inline('This content cannot be correctly rendered');
    }

    public function getAuralFallback(Root $root): ?Tag
    {
        // Fallback: display an indication that content cannot be correctly spoken.
        return new Inline('This content cannot be correctly spoken');
    }
}
