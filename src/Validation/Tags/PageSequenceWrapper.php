<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Tags;

use Lsa\Xml\Utils\Validation\Choice;
use Lsa\Xml\Utils\Validation\Definition;
use Lsa\Xml\Utils\Validation\Element;
use Lsa\Xsl\Core\Tags\Layout\PageSequence;
use Lsa\Xsl\Core\Tags\Layout\PageSequenceWrapper as LayoutPageSequenceWrapper;
use Lsa\Xsl\Core\Validation\Properties\Id;
use Lsa\Xsl\Core\Validation\Properties\IndexClass;
use Lsa\Xsl\Core\Validation\Properties\IndexKey;
use Lsa\Xsl\Core\Validation\PropertyGroups\InheritedProperties;

trait PageSequenceWrapper
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
                new Element(PageSequence::class),
                new Element(LayoutPageSequenceWrapper::class)
            ))->minOccurs(0)->maxOccurs('unbounded'))
            ->requires([
                Id::class,
                IndexKey::class,
            ])
            ->allows([
                IndexClass::class,
            ])
            ->inheritables([
                InheritedProperties::class,
            ]);
    }
}
