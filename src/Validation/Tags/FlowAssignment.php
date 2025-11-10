<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Tags;

use Lsa\Xml\Utils\Validation\Definition;
use Lsa\Xml\Utils\Validation\Element;
use Lsa\Xml\Utils\Validation\Sequence;
use Lsa\Xsl\Core\Tags\Layout\FlowSourceList;
use Lsa\Xsl\Core\Tags\Layout\FlowTargetList;
use Lsa\Xsl\Core\Validation\PropertyGroups\InheritedProperties;

trait FlowAssignment
{
    /**
     * Returns this tag definition
     * Assigns one sequence of flows to a sequence of regions.
     *
     * @return Definition This tag definition
     */
    public function asDefinition(): Definition
    {
        return (new Definition())
            ->sequence(new Sequence(
                new Element(FlowSourceList::class),
                new Element(FlowTargetList::class)
            ))
            ->inheritables([
                InheritedProperties::class,
            ]);
    }
}
