<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tags\Bookmark;

use Lsa\Xsl\Core\Contracts\HasAuralFallback;
use Lsa\Xsl\Core\Contracts\HasVisualFallback;
use Lsa\Xsl\Core\Tags\Layout\Root;
use Lsa\Xsl\Core\Traits\ExtendedAuralConformance;
use Lsa\Xsl\Core\Traits\ExtendedVisualConformance;
use Lsa\Xsl\Core\Validation\Tags\Bookmark as ValidateBookmark;
use Lsa\Xsl\Core\Xml\Tag;

/**
 * The fo:bookmark formatting object is used to identify an access point, by name, and to specify where that
 * access point is within the current document or another external document. A given bookmark may be further
 * subdivided into a sequence of (sub-)bookmarks to as many levels as the authors desire.
 *
 * Note:
 * The fo:bookmark is a specialized form of the fo:basic-link with restrictions on the applicable properties
 * and on its content model.
 *
 * Areas:
 * The fo:bookmark formatting object generates one or more normal inline-areas. The fo:bookmark returns these
 * areas.
 *
 * Constraints:
 * One of the external-destination and internal-destination properties should be specified. If both are
 * specified, the system may either report it as an error, or use the internal-destination property.
 * No area may have more than one normal child area returned by the same fo:bookmark formatting object.
 * The children of each normal area returned by an fo:bookmark must satisfy the constraints specified in
 * 4.7.3 Inline-building.
 * The property "starting-state" determines whether any sub-list of bookmarks is initially displayed or is
 * hidden. The value "show" means include the sub-list of bookmarks in the presentation of this bookmark. The
 * value "hide" means show only this bookmark in the presentation.
 *
 * @see https://www.w3.org/TR/xsl11/#area-inlinebuild
 *
 * Contents:
 * (bookmark-title,bookmark*)
 * @see https://www.w3.org/TR/xsl11/#fo_bookmark
 */
class Bookmark extends Tag implements HasAuralFallback, HasVisualFallback
{
    use ExtendedAuralConformance;
    use ExtendedVisualConformance;
    use ValidateBookmark;

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
