<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\TagGroups\Xsl;

use Lsa\Xml\Utils\Validation\Choice;
use Lsa\Xml\Utils\Validation\Element;
use Lsa\Xsl\Core\Tags\Layout\ColorProfile;
use Lsa\Xsl\Core\Tags\Layout\ConditionalPageMasterReference;
use Lsa\Xsl\Core\Tags\Layout\Declarations;
use Lsa\Xsl\Core\Tags\Layout\Flow;
use Lsa\Xsl\Core\Tags\Layout\FlowAssignment;
use Lsa\Xsl\Core\Tags\Layout\FlowMap;
use Lsa\Xsl\Core\Tags\Layout\FlowNameSpecifier;
use Lsa\Xsl\Core\Tags\Layout\FlowSourceList;
use Lsa\Xsl\Core\Tags\Layout\FlowTargetList;
use Lsa\Xsl\Core\Tags\Layout\LayoutMasterSet;
use Lsa\Xsl\Core\Tags\Layout\PageSequence;
use Lsa\Xsl\Core\Tags\Layout\PageSequenceWrapper;
use Lsa\Xsl\Core\Tags\Layout\RegionAfter;
use Lsa\Xsl\Core\Tags\Layout\RegionBefore;
use Lsa\Xsl\Core\Tags\Layout\RegionBody;
use Lsa\Xsl\Core\Tags\Layout\RegionEnd;
use Lsa\Xsl\Core\Tags\Layout\RegionNameSpecifier;
use Lsa\Xsl\Core\Tags\Layout\RegionStart;
use Lsa\Xsl\Core\Tags\Layout\RepeatablePageMasterAlternatives;
use Lsa\Xsl\Core\Tags\Layout\RepeatablePageMasterReference;
use Lsa\Xsl\Core\Tags\Layout\Root;
use Lsa\Xsl\Core\Tags\Layout\SimplePageMaster;
use Lsa\Xsl\Core\Tags\Layout\SinglePageMasterReference;
use Lsa\Xsl\Core\Tags\Layout\StaticContent;
use Lsa\Xsl\Core\Tags\Layout\Title;

/**
 * List of declarations and pagination and layout formatting objects
 *
 * @see https://www.w3.org/TR/xsl11/#d0e7057
 */
class LayoutList extends Choice
{
    public function __construct()
    {
        parent::__construct(
            new Element(Root::class),
            new Element(Declarations::class),
            new Element(ColorProfile::class),
            new Element(PageSequence::class),
            new Element(PageSequenceWrapper::class),
            new Element(LayoutMasterSet::class),
            new Element(SinglePageMasterReference::class),
            new Element(RepeatablePageMasterReference::class),
            new Element(RepeatablePageMasterAlternatives::class),
            new Element(ConditionalPageMasterReference::class),
            new Element(SimplePageMaster::class),
            new Element(RegionBody::class),
            new Element(RegionBefore::class),
            new Element(RegionAfter::class),
            new Element(RegionStart::class),
            new Element(RegionEnd::class),
            new Element(Flow::class),
            new Element(StaticContent::class),
            new Element(Title::class),
            new Element(FlowMap::class),
            new Element(FlowAssignment::class),
            new Element(FlowSourceList::class),
            new Element(FlowNameSpecifier::class),
            new Element(FlowTargetList::class),
            new Element(RegionNameSpecifier::class)
        );
    }
}
