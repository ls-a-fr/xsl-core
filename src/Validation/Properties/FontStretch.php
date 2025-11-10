<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\FontStretchType;

/**
 * CSS2 Definition:
 * - Value:  normal | wider | narrower | ultra-condensed | extra-condensed | condensed | semi-condensed |
 *     semi-expanded | expanded | extra-expanded | ultra-expanded | inherit
 * - Initial:  normal
 * - Inherited:  yes
 * - Percentages:  N/A
 * - Media:  visual
 *
 * The 'font-stretch' property selects a normal, condensed, or extended face from a font family.
 *
 * Absolute keyword values have the following ordering, from narrowest to widest :
 * 1. ultra-condensed
 * 2. extra-condensed
 * 3. condensed
 * 4. semi-condensed
 * 5. normal
 * 6. semi-expanded
 * 7. expanded
 * 8. extra-expanded
 * 9. ultra-expanded
 *
 * The relative keyword "wider" sets the value to the next expanded value above the inherited value
 * (while not increasing it above "ultra-expanded").
 *
 * The relative keyword "narrower" sets the value to the next condensed value below the inherited value
 * (while not decreasing it below "ultra-condensed").
 *
 * @link https://www.w3.org/TR/xsl11/#font-stretch
 * @link http://www.w3.org/TR/REC-CSS2/fonts.html#font-styling
 */
class FontStretch extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('font-stretch', FontStretchType::class);
    }

    public function getDefaultValue(): string
    {
        return FontStretchType::NORMAL;
    }
}
