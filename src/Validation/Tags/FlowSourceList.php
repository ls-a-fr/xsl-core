<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Tags;

use Lsa\Xml\Utils\Validation\Definition;
use Lsa\Xml\Utils\Validation\Element;
use Lsa\Xml\Utils\Validation\Sequence;
use Lsa\Xsl\Core\Tags\Layout\FlowNameSpecifier;
use Lsa\Xsl\Core\Validation\PropertyGroups\InheritedProperties;

trait FlowSourceList
{
    /**
     * Returns this tag definition
     * One flow in a source-list.
     *
     * @return Definition This tag definition
     */
    public function asDefinition(): Definition
    {
        return (new Definition())
            ->sequence(new Sequence(
                new Element(FlowNameSpecifier::class, minOccurs: 1, maxOccurs: 'unbounded')
            ))
            ->inheritables([
                InheritedProperties::class,
            ]);
    }
}
