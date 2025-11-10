<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Tags;

use Lsa\Xml\Utils\Validation\Choice;
use Lsa\Xml\Utils\Validation\Definition;
use Lsa\Xml\Utils\Validation\Element;
use Lsa\Xml\Utils\Validation\Sequence;
use Lsa\Xsl\Core\Tags\Bookmark\BookmarkTree;
use Lsa\Xsl\Core\Tags\Layout\Declarations;
use Lsa\Xsl\Core\Tags\Layout\LayoutMasterSet;
use Lsa\Xsl\Core\Tags\Layout\PageSequence;
use Lsa\Xsl\Core\Tags\Layout\PageSequenceWrapper;
use Lsa\Xsl\Core\Validation\Properties\Id;
use Lsa\Xsl\Core\Validation\Properties\IndexClass;
use Lsa\Xsl\Core\Validation\Properties\IndexKey;
use Lsa\Xsl\Core\Validation\Properties\MediaUsage;
use Lsa\Xsl\Core\Validation\PropertyGroups\AccessibilityProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\InheritedProperties;

trait Root
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
                new Element(LayoutMasterSet::class),
                new Element(Declarations::class, minOccurs: 0),
                new Element(BookmarkTree::class, minOccurs: 0),
                (new Choice(
                    new Element(PageSequence::class),
                    new Element(PageSequenceWrapper::class)
                ))->minOccurs(1)->maxOccurs('unbounded')
            ))
            ->allows([
                AccessibilityProperties::class,
                Id::class,
                IndexClass::class,
                IndexKey::class,
                MediaUsage::class,
            ])
            ->inheritables([
                InheritedProperties::class,
            ]);
    }
}
