<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\ShorthandTypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\PositionType;
use Lsa\Xsl\Core\Validation\Types\RelativePositionType;

/**
 * CSS2 Definition: as amended by http://www.w3.org/Style/css2-updates/REC-CSS2-19980512-errata.html#x11
 * - Value: static | relative | absolute | fixed | inherit
 * - Initial: static
 * - Inherited: no
 * - Percentages: N/A
 * - Media: visual
 *
 * Specifies the positioning scheme to be used.
 *
 * XSL modifications to the CSS definition:
 *
 * The CSS property shall be treated as a shorthand by XSL and maps as follows:
 * `static`:
 * - relative-position="static"
 * - absolute-position="auto"
 *
 * `relative`:
 * - relative-position="relative"
 * - absolute-position="auto"
 *
 * `absolute`:
 * - relative-position="static"
 * - absolute-position="absolute"
 *
 * `fixed`:
 * - relative-position="static"
 * - absolute-position="fixed"
 *
 * @link https://www.w3.org/TR/xsl11/#position
 * @link http://www.w3.org/TR/REC-CSS2/visuren.html#propdef-position
 */
class Position extends ShorthandTypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct(
            'position',
            PositionType::class,
            [
                AbsolutePosition::class,
                RelativePosition::class,
            ]
        );
    }

    public function getDefaultValue(): string
    {
        return RelativePositionType::STATIC;
    }
}
