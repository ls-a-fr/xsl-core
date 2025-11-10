<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\BackgroundPositionVerticalType;

/**
 * A Property Derived from a CSS2 Property.
 *
 * CSS Definition:
 * - Value:  `<percentage>` | `<length>` | left | center | right | inherit
 * - Initial:  0%
 * - Inherited:  no
 * - Percentages:  refer to the size of the padding-rectangle
 * - Media:  visual
 *
 * If a "background-image" has been specified, this property specifies its initial position vertically.
 *
 * XSL modifications to the CSS definition:
 * - "Top" and "bottom" are defined relative to the reference-orientation.
 *
 * @link https://www.w3.org/TR/xsl11/#background-position-vertical
 */
class BackgroundPositionVertical extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('background-position-vertical', BackgroundPositionVerticalType::class);
    }

    public function getDefaultValue(): string
    {
        return '0%';
    }
}
