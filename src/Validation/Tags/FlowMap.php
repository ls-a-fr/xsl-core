<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Tags;

use Lsa\Xml\Utils\Validation\Definition;
use Lsa\Xml\Utils\Validation\Element;
use Lsa\Xml\Utils\Validation\Sequence;
use Lsa\Xsl\Core\Tags\Layout\FlowAssignment;
use Lsa\Xsl\Core\Validation\Properties\FlowMapName;
use Lsa\Xsl\Core\Validation\PropertyGroups\InheritedProperties;

trait FlowMap
{
    /**
     * Returns this tag definition
     * Assigns flows to regions.
     *
     * @return Definition This tag definition
     */
    public function asDefinition(): Definition
    {
        return (new Definition())
            ->sequence(new Sequence(
                new Element(FlowAssignment::class, minOccurs: 1, maxOccurs: 'unbounded')
            ))
            ->allows([
                FlowMapName::class,
            ])
            ->inheritables([
                InheritedProperties::class,
            ]);
    }
}
