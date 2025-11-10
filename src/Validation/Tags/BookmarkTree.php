<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Tags;

use Lsa\Xml\Utils\Validation\Definition;
use Lsa\Xml\Utils\Validation\Element;
use Lsa\Xml\Utils\Validation\Sequence;
use Lsa\Xsl\Core\Tags\Bookmark\Bookmark;
use Lsa\Xsl\Core\Validation\PropertyGroups\InheritedProperties;

trait BookmarkTree
{
    /**
     * Returns this tag definition
     * A list of access points within the document such as a table
     * of contents, a list of figures or tables, etc. Each access
     * point is represented by a bookmark.
     *
     * @return Definition This tag definition
     */
    public function asDefinition(): Definition
    {
        return (new Definition())
            ->sequence(new Sequence(
                new Element(Bookmark::class, maxOccurs: 'unbounded')
            ))
            ->inheritables([
                InheritedProperties::class,
            ]);
    }
}
