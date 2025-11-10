<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tags\Bookmark;

use Lsa\Xsl\Core\Contracts\HasAuralFallback;
use Lsa\Xsl\Core\Contracts\HasVisualFallback;
use Lsa\Xsl\Core\Tags\Layout\Root;
use Lsa\Xsl\Core\Traits\ExtendedAuralConformance;
use Lsa\Xsl\Core\Traits\ExtendedVisualConformance;
use Lsa\Xsl\Core\Validation\Tags\BookmarkTitle as ValidateBookmarkTitle;
use Lsa\Xsl\Core\Xml\Tag;

/**
 * The fo:bookmark-title formatting object is used to identify, in human readable form, an access point.
 *
 * Note:
 * The fo:bookmark-title is a specialized form of the fo:inline with restrictions on the applicable properties
 * and on its content model.
 *
 * Areas:
 * The fo:bookmark-title formatting object generates one or more normal inline-areas. The fo:bookmark-title
 * returns these areas.
 *
 * Trait Derivation:
 * Even though the white-space-treatment, linefeed-treatment, and white-space-collapse properties are not
 * applicable to fo:bookmark-title, the implementation should behave as though these properties applied and had
 * their initial values.
 *
 * Constraints:
 * No area may have more than one normal child area returned by the same fo:bookmark-title formatting object.
 * The children of each normal area returned by an fo:bookmark-title must satisfy the constraints specified in
 * 4.7.3 Inline-building.
 *
 * @see https://www.w3.org/TR/xsl11/#area-inlinebuild
 *
 * Contents:
 * (#PCDATA)
 * @see https://www.w3.org/TR/xsl11/#fo_bookmark-title
 */
class BookmarkTitle extends Tag implements HasAuralFallback, HasVisualFallback
{
    use ExtendedAuralConformance;
    use ExtendedVisualConformance;
    use ValidateBookmarkTitle;

    public function getVisualFallback(Root $root): ?Tag
    {
        // Fallback: ignore.
        return null;
    }

    public function getAuralFallback(Root $root): ?Tag
    {
        // Fallback: ignore.
        return null;
    }
}
