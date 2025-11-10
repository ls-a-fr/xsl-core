<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\PlayDuringType;

/**
 * CSS2 Definition:
 * - Value:  `<uri-specification>` mix? repeat? | auto | none | inherit
 * - Initial:  auto
 * - Inherited:  no
 * - Percentages:  N/A
 * - Media:  aural
 *
 * Similar to the 'cue-before' and 'cue-after' properties, this property specifies a sound to be played
 * as a background while an element's content is spoken.
 *
 * @link https://www.w3.org/TR/xsl11/#play-during
 * @link http://www.w3.org/TR/REC-CSS2/aural.html#propdef-play-during
 */
class PlayDuring extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('play-during', PlayDuringType::class);
    }

    public function getDefaultValue(): string
    {
        return PlayDuringType::AUTO;
    }
}
