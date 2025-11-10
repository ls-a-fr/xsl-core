<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tags\Inline;

use Lsa\Xsl\Core\Contracts\HasVisualFallback;
use Lsa\Xsl\Core\Tags\Layout\Root;
use Lsa\Xsl\Core\Traits\BasicAuralConformance;
use Lsa\Xsl\Core\Traits\ExtendedVisualConformance;
use Lsa\Xsl\Core\Validation\Tags\BidiOverride as ValidateBidiOverride;
use Lsa\Xsl\Core\Xml\Tag;

/**
 * The fo:bidi-override formatting object is used when the Unicode BIDI algorithm fails. It forces a string of
 * text to be written in a specific direction.
 *
 * Areas:
 * The fo:bidi-override formatting object generates one or more normal inline-areas. The fo:bidi-override
 * returns these areas, together with any normal block-areas, page-level-out-of-line areas, and
 * reference-level-out-of-line areas returned by the children of the fo:bidi-override.
 *
 * Trait Derivation:
 * The direction traits are derived from the "writing-mode", "direction", and "unicode-bidi" properties as
 * described in 5.5.3 Writing-mode and Direction Properties.
 *
 * @see https://www.w3.org/TR/xsl11/#refine-writing-mode
 *
 * Constraints:
 * No area may have more than one normal child area returned by the same fo:bidi-override formatting object.
 * The children of each normal area returned by an fo:bidi-override must satisfy the constraints specified in
 * 4.7.3 Inline-building.
 * @see https://www.w3.org/TR/xsl11/#area-inlinebuild
 *
 * Contents:
 * (#PCDATA|%inline;|%block;)*
 *
 * In addition this formatting object may have a sequence of zero or more fo:markers as its initial children.
 * An fo:bidi-override that is a descendant of an fo:leader or of the fo:inline child of an fo:footnote may not
 * have block-level children, unless it has a nearer ancestor that is an fo:inline-container.
 * @see https://www.w3.org/TR/xsl11/#fo_bidi-override
 */
class BidiOverride extends Tag implements HasVisualFallback
{
    use BasicAuralConformance;
    use ExtendedVisualConformance;
    use ValidateBidiOverride;

    public function getVisualFallback(Root $root): ?Tag
    {
        // Fallback: display indication that content cannot be correctly rendered.
        return new Inline('This content cannot be correctly rendered');
    }
}
