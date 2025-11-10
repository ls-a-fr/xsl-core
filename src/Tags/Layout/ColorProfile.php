<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tags\Layout;

use Lsa\Xsl\Core\Contracts\HasVisualFallback;
use Lsa\Xsl\Core\Traits\ExtendedVisualConformance;
use Lsa\Xsl\Core\Traits\NotApplicableAuralConformance;
use Lsa\Xsl\Core\Validation\Tags\ColorProfile as ValidateColorProfile;
use Lsa\Xsl\Core\Xml\Tag;

/**
 * The fo:color-profile formatting object is used to declare an ICC Color Profile for a stylesheet. The
 * color-profile is referenced again via the name specified in the "color-profile-name" property.
 * The color-profile is identified by the URI specified in the "src" property value. This URI may identify an
 * internally recognized color-profile or it may point to a ICC Color Profile encoding that should be loaded
 * and interpreted.
 *
 * When the color-profile is referenced (e.g., via the rgb-icc function 5.10.2 Color Functions), the following
 * rules are used:
 * - If the color-profile is available, the color value identified from the color-profile should be used.
 * - If the color-profile is not available, the sRGB fallback must be used.
 *
 * @see https://www.w3.org/TR/xsl11/#expr-color-functions
 * @see https://www.w3.org/TR/xsl11/#sRGB
 *
 * Areas:
 * The fo:color-profile formatting object does not generate or return any areas.
 *
 * Constraints:
 * None.
 *
 * Contents:
 * EMPTY
 * @see https://www.w3.org/TR/xsl11/#fo_color-profile
 */
class ColorProfile extends Tag implements HasVisualFallback
{
    use ExtendedVisualConformance;
    use NotApplicableAuralConformance;
    use ValidateColorProfile;

    public function getVisualFallback(Root $root): ?Tag
    {
        // Fallback: ignore, use the sRGB fallback of the rgb-icc function
        return null;
    }
}
