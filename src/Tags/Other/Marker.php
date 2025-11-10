<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tags\Other;

use Lsa\Xsl\Core\Contracts\HasAuralFallback;
use Lsa\Xsl\Core\Contracts\HasVisualFallback;
use Lsa\Xsl\Core\Tags\Layout\Root;
use Lsa\Xsl\Core\Traits\ExtendedAuralConformance;
use Lsa\Xsl\Core\Traits\ExtendedVisualConformance;
use Lsa\Xsl\Core\Validation\Tags\Marker as ValidateMarker;
use Lsa\Xsl\Core\Xml\Tag;

/**
 * The fo:marker is used in conjunction with fo:retrieve-marker or fo:retrieve-table-marker to produce running
 * headers or footers and dynamic table headers or footers. Typical examples include:
 * - dictionary headers showing the first and last word defined on the page.
 * - headers showing the page's chapter and section titles.
 * - subtotals e.g. that give a subtotal of numbers in rows up to the last row on the current page.
 * - table-continued captions that show whether or not a table is continued after the current page, or was a
 *   continuation from a previous page.
 *
 * The fo:marker has to be an initial child of its parent formatting object.
 *
 * Areas:
 * The fo:marker does not directly produce any area. Its children may be retrieved and formatted from within
 * an fo:static-content or table header/footer, using an fo:retrieve-marker or an fo:retrieve-table-marker
 * respectively, whose "retrieve-class-name" property value is the same as the "marker-class-name" property
 * value of this fo:marker.
 *
 * Constraints:
 * An fo:marker is only permitted as the descendant of an fo:flow.
 *
 * Note:
 * Property values set on an fo:marker or its ancestors will not be inherited by the children of the fo:marker
 * when they are retrieved by an fo:retrieve-marker or fo:retrieve-table-marker.
 *
 * It is an error if two or more fo:markers that share the same parent have the same "marker-class-name"
 * property value.
 *
 * Contents:
 * (#PCDATA|%inline;|%block;)*
 *
 * An fo:marker may contain any formatting objects that are permitted as a replacement of any fo:retrieve-marker
 * or fo:retrieve-table-marker that retrieves the fo:marker's children. No fo:marker may have as a descendant
 * any fo:marker, fo:retrieve-marker, or fo:retrieve-table-marker.
 *
 * @see https://www.w3.org/TR/xsl11/#fo_marker
 */
class Marker extends Tag implements HasAuralFallback, HasVisualFallback
{
    use ExtendedAuralConformance;
    use ExtendedVisualConformance;
    use ValidateMarker;

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
