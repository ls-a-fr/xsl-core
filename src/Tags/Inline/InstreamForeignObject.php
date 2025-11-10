<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tags\Inline;

use Lsa\Xsl\Core\Contracts\HasAuralFallback;
use Lsa\Xsl\Core\Contracts\HasVisualFallback;
use Lsa\Xsl\Core\Tags\Layout\Root;
use Lsa\Xsl\Core\Traits\ExtendedAuralConformance;
use Lsa\Xsl\Core\Traits\ExtendedVisualConformance;
use Lsa\Xsl\Core\Validation\Tags\InstreamForeignObject as ValidateInstreamForeignObject;
use Lsa\Xsl\Core\Xml\Tag;

/**
 * The fo:instream-foreign-object flow object is used for an inline graphic or other "generic" object where the
 * object data resides as descendants of the fo:instream-foreign-object, typically as an XML element subtree in
 * a non-XSL namespace.
 *
 * Note:
 * A common format is SVG.
 *
 * Areas:
 * The fo:instream-foreign-object formatting object generates and returns one inline viewport-area and one
 * reference-area containing the instream-foreign-object. The inline-level area uses the
 * large-allocation-rectangle as defined in 4.2.3 Geometric Definitions.
 *
 * @see https://www.w3.org/TR/xsl11/#area-geo
 *
 * Constraints:
 * The viewport's size is determined by the block-progression-dimension and inline-progression-dimension traits.
 * For values of "auto", the content size of the instream foreign object is used.
 * The content size of an instream-foreign-object is determined by taking the intrinsic size of the object and
 * scaling as specified by the content-height, content-width, scaling, allowed-height-scale, and
 * allowed-width-scale traits. If one of the content-height or content-width is not "auto", the same scale
 * factor (as calculated from the specified non-auto value) is applied equally to both directions.
 * Once scaled, the reference-area is aligned with respect to the viewport-area using the text-align and
 * display-align traits. If it is too large for the viewport-area, the instream-foreign-object is aligned as if
 * it would fit and the overflow trait controls the clipping, scroll bars, etc.
 * In the case when the instream-foreign-object does not specify an intrinsic size of the object, the size is
 * determined in an implementation defined manner.
 *
 * Contents:
 * The fo:instream-foreign-object flow object has a child from a non-XSL namespace. The permitted structure of
 * this child is that defined for that namespace.
 * The fo:instream-foreign-object flow object may have additional attributes in the non-XSL namespace. These,
 * as well as the xsl defined properties, are made available to the processor of the content of the flow object.
 * Their semantics are defined by that namespace.
 * @see https://www.w3.org/TR/xsl11/#fo_instream-foreign-object
 */
class InstreamForeignObject extends Tag implements HasAuralFallback, HasVisualFallback
{
    use ExtendedAuralConformance;
    use ExtendedVisualConformance;
    use ValidateInstreamForeignObject;

    public function getVisualFallback(Root $root): ?Tag
    {
        // Fallback: display an indication that content cannot be correctly rendered.
        return new Inline('This content cannot be correctly rendered');
    }

    public function getAuralFallback(Root $root): ?Tag
    {
        // Fallback: speak an indication that content cannot be correctly spoken.
        return new Inline('This content cannot be correctly spoken');
    }
}
