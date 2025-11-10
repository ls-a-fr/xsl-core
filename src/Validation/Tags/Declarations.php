<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Tags;

use Lsa\Xml\Utils\Validation\Any;
use Lsa\Xml\Utils\Validation\Definition;
use Lsa\Xml\Utils\Validation\Element;
use Lsa\Xml\Utils\Validation\Sequence;
use Lsa\Xsl\Core\Tags\Layout\ColorProfile;
use Lsa\Xsl\Core\Validation\PropertyGroups\InheritedProperties;

trait Declarations
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
                new Element(ColorProfile::class, minOccurs: 0, maxOccurs: 'unbounded'),
                new Any(minOccurs: 0, maxOccurs: 'unbounded', namespace: '##other', processContents: 'skip')
            ))
            ->inheritables([
                InheritedProperties::class,
            ]);
    }
}
