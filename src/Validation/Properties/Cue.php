<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\ShorthandTypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\CueType;

/**
 * CSS2 Definition:
 * Value: `<cue-before>` || `<cue-after>` | inherit
 * Initial: not defined for shorthand properties
 * Inherited: no
 * Percentages: N/A
 * Media: aural
 *
 * The 'cue' property is a shorthand for setting 'cue-before' and 'cue-after'. If two values are given,
 * the first value is 'cue-before' and the second is 'cue-after'. If only one value is given, it applies
 * to both properties.
 *
 * If a user agent cannot render an auditory icon (e.g., the user's environment does not permit it), we
 * recommend that it produce an alternative cue.
 *
 * Auditory icons are another way to distinguish semantic elements. Sounds may be played before and/or
 * after the element to delimit it. Values have the following meanings.
 *
 * @link https://www.w3.org/TR/xsl11/#cue
 * @link http://www.w3.org/TR/REC-CSS2/aural.html#propdef-cue
 */
class Cue extends ShorthandTypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct(
            'cue',
            CueType::class,
            [
                CueAfter::class,
                CueBefore::class,
            ]
        );
    }

    public function getDefaultValue(): string
    {
        return implode(' ', [
            (new CueBefore())->getDefaultValue(),
            (new CueAfter())->getDefaultValue(),
        ]);
    }
}
