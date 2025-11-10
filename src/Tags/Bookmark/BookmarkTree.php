<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tags\Bookmark;

use Lsa\Xsl\Core\Contracts\HasAuralFallback;
use Lsa\Xsl\Core\Contracts\HasVisualFallback;
use Lsa\Xsl\Core\Tags\Inline\Inline;
use Lsa\Xsl\Core\Tags\Layout\Root;
use Lsa\Xsl\Core\Traits\ExtendedAuralConformance;
use Lsa\Xsl\Core\Traits\ExtendedVisualConformance;
use Lsa\Xsl\Core\Validation\Tags\BookmarkTree as ValidateBookmarkTree;
use Lsa\Xsl\Core\Xml\Tag;

/**
 * The fo:bookmark-tree formatting object is used to hold a list of access points within the document such as a
 * table of contents, a list of figures or tables, etc. Each access point is called a bookmark.
 *
 * Areas:
 * This formatting object returns the sequence of areas returned by the children of this formatting object.
 *
 * Constraints:
 * The sequence of returned areas must be the concatenation of the sub-sequences of areas returned by each of
 * the flow children of the fo:bookmark-tree formatting object in the order in which the children occur.
 *
 * Contents:
 * (bookmark+)
 *
 * @see https://www.w3.org/TR/xsl11/#fo_bookmark-tree
 */
class BookmarkTree extends Tag implements HasAuralFallback, HasVisualFallback
{
    use ExtendedAuralConformance;
    use ExtendedVisualConformance;
    use ValidateBookmarkTree;

    public function getVisualFallback(Root $root): ?Tag
    {
        // Fallback: display an indication that content cannot be correctly rendered.
        return new Inline('This content cannot be correctly rendered');
    }

    public function getAuralFallback(Root $root): ?Tag
    {
        // Fallback: display an indication that content cannot be correctly spoken.
        return new Inline('This content cannot be correctly spoken');
    }
}
