<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\ShorthandTypedAttribute;
use Lsa\Xsl\Core\Validation\Types\PauseType;

/**
 * CSS2 Definition:
 * Value: [`<time>` | `<percentage>`]{1,2} | inherit
 * Initial: depends on user agent
 * Inherited: no
 * Percentages: see descriptions of 'pause-before' and 'pause-after'
 * Media: aural
 *
 * CSS2 Reference: "pause" property
 *
 * @link https://www.w3.org/TR/xsl11/#pause
 * @link http://www.w3.org/TR/REC-CSS2/aural.html#propdef-pause
 */
class Pause extends ShorthandTypedAttribute
{
    public function __construct()
    {
        parent::__construct(
            'pause',
            PauseType::class,
            [
                PauseAfter::class,
                PauseBefore::class,
            ]
        );
    }
}
