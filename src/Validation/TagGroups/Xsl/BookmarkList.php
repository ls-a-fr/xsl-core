<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\TagGroups\Xsl;

use Lsa\Xml\Utils\Validation\Choice;
use Lsa\Xml\Utils\Validation\Element;
use Lsa\Xsl\Core\Tags\Bookmark\Bookmark;
use Lsa\Xsl\Core\Tags\Bookmark\BookmarkTitle;
use Lsa\Xsl\Core\Tags\Bookmark\BookmarkTree;

/**
 * List of formatting objects for bookmarks
 *
 * @see https://www.w3.org/TR/xsl11/#d0e14206
 */
class BookmarkList extends Choice
{
    public function __construct()
    {
        parent::__construct(
            new Element(BookmarkTree::class),
            new Element(Bookmark::class),
            new Element(BookmarkTitle::class)
        );
    }
}
