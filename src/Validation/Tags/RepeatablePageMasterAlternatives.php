<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Tags;

use Lsa\Xml\Utils\Validation\Definition;
use Lsa\Xml\Utils\Validation\Element;
use Lsa\Xml\Utils\Validation\Sequence;
use Lsa\Xsl\Core\Tags\Layout\ConditionalPageMasterReference;
use Lsa\Xsl\Core\Validation\Properties\MaximumRepeats;
use Lsa\Xsl\Core\Validation\PropertyGroups\InheritedProperties;

trait RepeatablePageMasterAlternatives
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
                new Element(ConditionalPageMasterReference::class, maxOccurs: 'unbounded')
            ))
            ->allows([
                MaximumRepeats::class,
            ])
            ->inheritables([
                InheritedProperties::class,
            ]);
    }
}
