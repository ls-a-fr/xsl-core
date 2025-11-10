<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Tags;

use Lsa\Xml\Utils\Validation\Choice;
use Lsa\Xml\Utils\Validation\Definition;
use Lsa\Xml\Utils\Validation\Element;
use Lsa\Xsl\Core\Tags\Layout\FlowMap;
use Lsa\Xsl\Core\Tags\Layout\PageSequenceMaster;
use Lsa\Xsl\Core\Tags\Layout\SimplePageMaster;
use Lsa\Xsl\Core\Validation\PropertyGroups\InheritedProperties;

trait LayoutMasterSet
{
    /**
     * Returns this tag definition
     *
     * @return Definition This tag definition
     */
    public function asDefinition(): Definition
    {
        return (new Definition())
            ->choice((new Choice(
                new Element(SimplePageMaster::class),
                new Element(PageSequenceMaster::class),
                new Element(FlowMap::class)
            ))->maxOccurs('unbounded'))
            ->inheritables([
                InheritedProperties::class,
            ]);
    }
}
