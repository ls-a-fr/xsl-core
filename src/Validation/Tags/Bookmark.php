<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Tags;

use Lsa\Xml\Utils\Validation\Definition;
use Lsa\Xml\Utils\Validation\Element;
use Lsa\Xml\Utils\Validation\Sequence;
use Lsa\Xsl\Core\Tags\Bookmark\Bookmark as BookmarkElement;
use Lsa\Xsl\Core\Tags\Bookmark\BookmarkTitle;
use Lsa\Xsl\Core\Validation\Properties\ExternalDestination;
use Lsa\Xsl\Core\Validation\Properties\InternalDestination;
use Lsa\Xsl\Core\Validation\Properties\StartingState;
use Lsa\Xsl\Core\Validation\PropertyGroups\AccessibilityProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\InheritedProperties;

trait Bookmark
{
    /**
     * Returns this tag definition
     * Identifies an access point, by name, and specifies where that access point is
     * within the current document or another external document. A given bookmark may
     * be further subdivided into a sequence of (sub-)bookmarks to as many levels as
     * the authors desire.
     *
     * @return Definition This tag definition
     */
    public function asDefinition(): Definition
    {
        return (new Definition())
            ->sequence(new Sequence(
                new Element(BookmarkTitle::class, minOccurs: 1, maxOccurs: 1),
                new Element(BookmarkElement::class, minOccurs: 0, maxOccurs: 'unbounded')
            ))
            ->allows([
                AccessibilityProperties::class,
                ExternalDestination::class,
                InternalDestination::class,
                StartingState::class,
            ])
            ->inheritables([
                InheritedProperties::class,
            ]);
    }
}
