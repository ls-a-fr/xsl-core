<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tags\Layout;

use Lsa\Xml\Utils\Collections\NodeCollection;
use Lsa\Xml\Utils\Xml\Attribute;
use Lsa\Xsl\Core\Traits\BasicAuralConformance;
use Lsa\Xsl\Core\Traits\BasicVisualConformance;
use Lsa\Xsl\Core\Validation\CurrentValidationProfile;
use Lsa\Xsl\Core\Validation\Tags\LayoutMasterSet as ValidateLayoutMasterSet;
use Lsa\Xsl\Core\Validation\Types\RegionNameType;
use Lsa\Xsl\Core\Xml\Tag;

/**
 * The fo:layout-master-set is a wrapper around all masters used in the document. This includes
 * page-sequence-masters, page-masters, and flow-maps.
 *
 * Areas:
 * The fo:layout-master-set formatting object generates no area directly. The masters that are the children of
 * the fo:layout-master-set are used by the fo:page-sequence to generate pages.
 *
 * Constraints:
 * The value of the master-name trait on each child of the fo:layout-master-set must be unique within the set.
 *
 * Contents:
 * (simple-page-master|page-sequence-master|flow-map)+
 *
 * @see https://www.w3.org/TR/xsl11/#fo_layout-master-set
 */
class LayoutMasterSet extends Tag
{
    use BasicAuralConformance;
    use BasicVisualConformance;
    use ValidateLayoutMasterSet;

    public function getChildren(): NodeCollection
    {
        // Does this profile allow FlowMap?
        if (
            CurrentValidationProfile::hasProfile() === true
            && CurrentValidationProfile::getProfile()->check(FlowMap::class) !== null
        ) {
            // Does it have a FlowMap?
            $flowMap = parent::getChildren()->filter(fn ($c) => $c instanceof FlowMap);
            if ($flowMap->isEmpty() === true) {
                // Creates an implicit FlowMap
                $this->child($this->getDefaultFlowMap());
            }
        }

        return parent::getChildren();
    }

    /**
     * Implicit flow-map:
     * ```xml
     * <fo:flow-map>
     *    <fo:flow-assignment>
     *        <fo:flow-source-list>
     *        <fo:flow-name-specifier
     *            flow-name-reference="xsl-region-body"/>
     *        </fo:flow-source-list>
     *        <fo:flow-target-list>
     *        <fo:region-name-specifier
     *            region-name-reference="xsl-region-body"/>
     *        </fo:flow-target-list>
     *    </fo:flow-assignment>
     *    <fo:flow-assignment>
     *        <fo:flow-source-list>
     *        <fo:flow-name-specifier
     *            flow-name-reference="xsl-region-before"/>
     *        </fo:flow-source-list>
     *        <fo:flow-target-list>
     *        <fo:region-name-specifier
     *            region-name-reference="xsl-region-before"/>
     *        </fo:flow-target-list>
     *    </fo:flow-assignment>
     *    <fo:flow-assignment>
     *        <fo:flow-source-list>
     *        <fo:flow-name-specifier
     *            flow-name-reference="xsl-region-after"/>
     *        </fo:flow-source-list>
     *        <fo:flow-target-list>
     *        <fo:region-name-specifier
     *            region-name-reference="xsl-region-after"/>
     *        </fo:flow-target-list>
     *    </fo:flow-assignment>
     *    <fo:flow-assignment>
     *        <fo:flow-source-list>
     *        <fo:flow-name-specifier
     *            flow-name-reference="xsl-region-start"/>
     *        </fo:flow-source-list>
     *        <fo:flow-target-list>
     *        <fo:region-name-specifier
     *            region-name-reference="xsl-region-start"/>
     *        </fo:flow-target-list>
     *    </fo:flow-assignment>
     *    <fo:flow-assignment>
     *        <fo:flow-source-list>
     *        <fo:flow-name-specifier
     *            flow-name-reference="xsl-region-end"/>
     *        </fo:flow-source-list>
     *        <fo:flow-target-list>
     *        <fo:region-name-specifier
     *            region-name-reference="xsl-region-end"/>
     *        </fo:flow-target-list>
     *    </fo:flow-assignment>
     * </fo:flow-map>
     * ```
     */
    private function getDefaultFlowMap(): FlowMap
    {
        return (new FlowMap())
            ->child((new FlowAssignment())
                ->child((new FlowSourceList())
                    ->child((new FlowNameSpecifier())
                        ->attribute(new Attribute('flow-name-reference', RegionNameType::XSL_REGION_BODY))))
                ->child((new FlowTargetList())
                    ->child((new FlowNameSpecifier())
                        ->attribute(new Attribute('region-name-reference', RegionNameType::XSL_REGION_BODY)))))
            ->child((new FlowAssignment())
                ->child((new FlowSourceList())
                    ->child((new FlowNameSpecifier())
                        ->attribute(new Attribute('flow-name-reference', RegionNameType::XSL_REGION_BEFORE))))
                ->child((new FlowTargetList())
                    ->child((new FlowNameSpecifier())
                        ->attribute(new Attribute('region-name-reference', RegionNameType::XSL_REGION_BEFORE)))))
            ->child((new FlowAssignment())
                ->child((new FlowSourceList())
                    ->child((new FlowNameSpecifier())
                        ->attribute(new Attribute('flow-name-reference', RegionNameType::XSL_REGION_AFTER))))
                ->child((new FlowTargetList())
                    ->child((new FlowNameSpecifier())
                        ->attribute(new Attribute('region-name-reference', RegionNameType::XSL_REGION_AFTER)))))
            ->child((new FlowAssignment())
                ->child((new FlowSourceList())
                    ->child((new FlowNameSpecifier())
                        ->attribute(new Attribute('flow-name-reference', RegionNameType::XSL_REGION_START))))
                ->child((new FlowTargetList())
                    ->child((new FlowNameSpecifier())
                        ->attribute(new Attribute('region-name-reference', RegionNameType::XSL_REGION_START)))))
            ->child((new FlowAssignment())
                ->child((new FlowSourceList())
                    ->child((new FlowNameSpecifier())
                        ->attribute(new Attribute('flow-name-reference', RegionNameType::XSL_REGION_END))))
                ->child((new FlowTargetList())
                    ->child((new FlowNameSpecifier())
                        ->attribute(new Attribute('region-name-reference', RegionNameType::XSL_REGION_END)))));
    }
}
