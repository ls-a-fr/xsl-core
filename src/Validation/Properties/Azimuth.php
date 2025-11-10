<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\AzimuthType;

/**
 * CSS2 Definition:
 * - Value:  `<angle>` | [[ left-side | far-left | left | center-left | center | center-right | right |
 *     far-right | right-side ] || behind ] | leftwards | rightwards | inherit
 * - Initial:  center
 * - Inherited:  yes
 * - Percentages:  N/A
 * - Media:  aural
 *
 * This property is most likely to be implemented by mixing the same signal into different channels at
 * differing volumes. It might also use phase shifting, digital delay, and other such techniques to
 * provide the illusion of a sound stage. The precise means used to achieve this effect and the number
 * of speakers used to do so are user agent-dependent; this property merely identifies the desired end
 * result.
 *
 * @link https://www.w3.org/TR/xsl11/#azimuth
 * @link http://www.w3.org/TR/REC-CSS2/aural.html#propdef-azimuth
 */
class Azimuth extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('azimuth', AzimuthType::class);
    }

    public function getDefaultValue(): string
    {
        return AzimuthType::CENTER;
    }
}
