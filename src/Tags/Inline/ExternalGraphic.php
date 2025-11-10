<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tags\Inline;

use Lsa\Xsl\Core\Traits\BasicAuralConformance;
use Lsa\Xsl\Core\Traits\BasicVisualConformance;
use Lsa\Xsl\Core\Validation\Tags\ExternalGraphic as ValidateExternalGraphic;
use Lsa\Xsl\Core\Xml\Tag;

/**
 * The fo:external-graphic flow object is used for a graphic where the graphics data resides outside of the
 * fo:element tree.
 *
 * Areas:
 * The fo:external-graphic formatting object generates and returns one inline-level viewport-area and one
 * reference-area containing the external graphic. The inline-level area uses the large-allocation-rectangle as
 * defined in 4.2.3 Geometric Definitions.
 *
 * @see https://www.w3.org/TR/xsl11/#area-geo
 *
 * Note:
 * An fo:external-graphic may be placed block-level by enclosing it in an fo:block.
 *
 * A "line-stacking-strategy" of "max-height" or "line-height" is typically used for stacking one or more lines
 * with fo:external-graphic content.
 *
 * Constraints:
 * The viewport's size is determined by the block-progression-dimension and inline-progression-dimension traits.
 * For values of "auto", the content size of the graphic is used.
 * The content size of a graphic is determined by taking the intrinsic size of the graphic and scaling as
 * specified by the content-height, content-width, scaling, allowed-height-scale, and allowed-width-scale
 * traits. If one of the content-height or content-width is not "auto", the same scale factor (as calculated
 * from the specified non-auto value) is applied equally to both directions.
 * Once scaled, the reference-area is aligned with respect to the viewport-area using the text-align and
 * display-align traits. If it is too large for the viewport-area, the graphic is aligned as if it would fit and
 * the overflow trait controls the clipping, scroll bars, etc.
 * In the case when the graphics format does not specify an intrinsic size of the graphic the size is determined
 * in an implementation-defined manner.
 *
 * Note:
 * For example, a size of 1/96" as the size of one pixel for rasterized images may be used.
 *
 * Contents:
 * EMPTY
 * @see https://www.w3.org/TR/xsl11/#fo_external-graphic
 */
class ExternalGraphic extends Tag
{
    use BasicAuralConformance;
    use BasicVisualConformance;
    use ValidateExternalGraphic;
}
