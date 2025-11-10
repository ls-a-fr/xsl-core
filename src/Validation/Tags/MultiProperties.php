<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Tags;

use Lsa\Xml\Utils\Validation\Definition;
use Lsa\Xml\Utils\Validation\Element;
use Lsa\Xml\Utils\Validation\Sequence;
use Lsa\Xsl\Core\Tags\Multi\MultiPropertySet;
use Lsa\Xsl\Core\Tags\Other\Wrapper;
use Lsa\Xsl\Core\Validation\PropertyGroups\AccessibilityProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\InheritedProperties;

trait MultiProperties
{
    /**
     * Returns this tag definition
     *
     * @return Definition This tag definition
     */
    public function asDefinition(): Definition
    {
        return (new Definition())
            ->sequence(new Sequence(
                new Element(MultiPropertySet::class, maxOccurs: 'unbounded'),
                new Element(Wrapper::class)
            ))
            ->allows([
                AccessibilityProperties::class,
            ])
            ->inheritables([
                InheritedProperties::class,
            ]);
    }
}
