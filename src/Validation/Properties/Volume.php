<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\VolumeType;

/**
 * CSS2 Definition:
 * - Value:  `<number>` | `<percentage>` | silent | x-soft | soft | medium | loud | x-loud | inherit
 * - Initial:  medium
 * - Inherited:  yes
 * - Percentages:  refer to inherited value
 * - Media:  aural
 *
 * A comma-separated, prioritized list of voice family names.
 *
 * Volume refers to the median volume of the waveform. In other words, a highly inflected voice at
 * a volume of 50 might peak well above that. The overall values are likely to be human adjustable
 * for comfort, for example with a physical volume control (which would increase both the 0 and 100
 * values proportionately); what this property does is adjust the dynamic range.
 *
 * User agents should allow the values corresponding to '0' and '100' to be set by the listener. No
 * one setting is universally applicable; suitable values depend on the equipment in use (speakers,
 * headphones), the environment (in car, home theater, library) and personal preferences. Some
 * examples:
 * - A browser for in-car use has a setting for when there is lots of background noise. '0' would map
 * to a fairly high level and '100' to a quite high level. The speech is easily audible over the road
 * noise but the overall dynamic range is compressed. Cars with better insulation might allow a wider
 * dynamic range.
 * - Another speech browser is being used in an apartment, late at night, or in a shared study room.
 * '0' is set to a very quiet level and '100' to a fairly quiet level, too. As with the first example,
 * there is a low slope; the dynamic range is reduced. The actual volumes are low here, whereas they
 * were high in the first example.
 * - In a quiet and isolated house, an expensive hi-fi home theater setup. '0' is set fairly low and
 * '100' to quite high; there is wide dynamic range.
 *
 * The same author style sheet could be used in all cases, simply by mapping the '0' and '100' points
 * suitably at the client side.
 *
 * `<number>`: Any number between '0' and '100'. '0' represents the minimum audible volume level and
 * 100 corresponds to the maximum comfortable level.
 *
 * `<percentage>`: Percentage values are calculated relative to the inherited value, and are then
 * clipped to the range '0' to '100'.
 *
 * @link https://www.w3.org/TR/xsl11/#volume
 * @link http://www.w3.org/TR/REC-CSS2/aural.html#propdef-volume
 */
class Volume extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('volume', VolumeType::class);
    }

    public function getDefaultValue(): string
    {
        return VolumeType::MEDIUM;
    }
}
