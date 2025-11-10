<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tags\Layout;

use Lsa\Xsl\Core\Traits\BasicAuralConformance;
use Lsa\Xsl\Core\Traits\BasicVisualConformance;
use Lsa\Xsl\Core\Validation\Tags\SimplePageMaster as ValidateSimplePageMaster;
use Lsa\Xsl\Core\Xml\Tag;

/**
 * The fo:simple-page-master is used in the generation of pages and specifies the geometry of the page. The
 * page is subdivided into regions: one or more region-body, and up to four other regions: region-before,
 * region-after, region-start, and region-end.
 *
 * Note:
 * For example, if the writing-mode of the fo:simple-page-master is "lr-tb", then these regions correspond to
 * the body of a document, the header, the footer, the left sidebar, and the right sidebar.
 *
 * Note:
 * The simple-page-master is intended for systems that wish to provide a simple page layout facility. Future
 * versions of this Recommendation may support more complex page layouts constructed using the fo:page-master
 * formatting object.
 *
 * Areas:
 * The fo:simple-page-master formatting object generates no area directly. It is used in the generation of
 * pages by an fo:page-sequence.
 * When the fo:simple-page-master is used to generate a page, a viewport/reference pair is generated,
 * consisting of a page-viewport-area and a page-reference-area. The page-viewport-area represents the physical
 * bounds of the output medium. The page-reference-area represents the portion of the page on which content is
 * intended to appear; that is, the area inside the page margins.
 * In addition, when the fo:simple-page-master is used to generate a page, viewport/reference pairs that
 * correspond to the regions that are the children of the fo:simple-page-master are also generated. (See the
 * formatting object specifications for the five regions (6.4.14 fo:region-body, 6.4.15 fo:region-before,
 * 6.4.16 fo:region-after, 6.4.17 fo:region-start, and 6.4.18 fo:region-end) for the details on the generation
 * of these areas.) The "writing-mode" of the page is used to determine the placement of the five regions on
 * the master.
 *
 * @see \Lsa\Xsl\Core\Tags\Layout\RegionBody
 * @see \Lsa\Xsl\Core\Tags\Layout\RegionBefore
 * @see \Lsa\Xsl\Core\Tags\Layout\RegionAfter
 * @see \Lsa\Xsl\Core\Tags\Layout\RegionStart
 * @see \Lsa\Xsl\Core\Tags\Layout\RegionEnd
 * @see https://www.w3.org/TR/xsl11/ViewportsToPage-level.gif
 *
 * Region-viewport-areas
 * The spacing between the outer four regions and each fo:region-body is determined by subtracting the relevant
 * extent trait on each outer region from the "margin-x" property on that fo:region-body.
 *
 * Trait Derivation:
 * The reference-orientation of the page-reference-area and writing-mode of the page-viewport-area are
 * determined by the formatting object that generates the area (see 6.4.5 fo:page-sequence). The writing-mode
 * of the page-reference-area is set to the same value as that of the page-viewport-area.
 * Reference-orientation does not affect the page-viewport-area and its reference-orientation is set to "0".
 * Borders and padding are not allowed with a page-reference-area. The remaining traits on the
 * page-reference-area are set according to the normal rules for determining the values of traits.
 * @see \Lsa\Xsl\Core\Tags\Layout\PageSequence
 *
 * Constraints:
 * When a page-master is used in the generation of a page, the block-progression-dimension and
 * inline-progression-dimension of the content-rectangle of the page-viewport-area are determined using the
 * computed values of the "page-height" and "page-width" properties. For sheet media, the computed values of
 * the "page-height" and "page-width" properties determine the orientation of the sheet; "page-height" is
 * measured from "top" to "bottom". For display media, the display window is always upright; the top of the
 * display screen is "top".
 * The traits derived from the "margin-top", "margin-bottom", "margin-left" and "margin-right" properties are
 * used to indent the page-reference-area content-rectangle from the corresponding edge of the
 * content-rectangle of the page-viewport-area.
 *
 * Note:
 * The reference points for the page-viewport-area content-rectangle are in terms of the "top", "bottom",
 * "left", and "right" rather than "before-edge", "after-edge", "start-edge", and "end-edge" because users see
 * the media relative to its orientation and not relative to the writing-mode currently in use.
 * @see https://www.w3.org/TR/xsl11/MediaReferenceArea.gif
 *
 * The value of the folio-number trait on the first page returned by the fo:page-sequence is constrained to
 * equal the value of the initial-page-number trait. The value of the folio-number trait on subsequent pages is
 * constrained to be one greater than the value on the immediately preceding page.
 * The format, letter-value, grouping-separator, grouping-size, country, and language traits are used to format
 * the number into a string form, as specified in [XSLT]. This formatted number is used by the fo:page-number
 * flow object.
 * @see https://www.w3.org/TR/xsl11/#XSLT
 *
 * Constraints applicable to regions:
 * There are a number of constraints that apply to all the regions that are specified within a given
 * fo:simple-page-master.
 * @see https://www.w3.org/TR/xsl11/PageAndRegion-bodyWithOrientationOnPage.gif

 * If the block-progression-dimension of the properly stacked region-reference-area is greater than the
 * block-progression-dimension of the region-viewport-area that is its parent, then the constraints on the
 * relationship between the region-viewport-area and the region-reference-area depend on values of the overflow
 * trait on the region-master and the kind of flows assigned to the region.
 * If all the flows assigned to the corresponding region are fo:static-content flow objects, then there is no
 * constraint on the block-progression-dimension of the region-reference-area.
 * If all the flows assigned to the corresponding region are fo:flow formatting objects, then
 * - If the value of the media-usage trait is paginate, or the value of the overflow trait is visible, hidden,
 *   or error-if-overflow, then the block-progression-dimension of the region-reference-area is constrained to
 *   be no greater than the block-progression-dimension of the region-viewport-area.
 * - If the value of the media-usage trait is bounded-in-one-dimension or unbounded, and the value of the
 *   overflow trait is scroll or auto, then there is no constraint on the block-progression-dimension of the
 *   region-reference-area.
 *
 * Contents:
 * (region-body+,region-before?,region-after?,region-start?,region-end?)
 * @see https://www.w3.org/TR/xsl11/#fo_simple-page-master
 */
class SimplePageMaster extends Tag
{
    use BasicAuralConformance;
    use BasicVisualConformance;
    use ValidateSimplePageMaster;
}
