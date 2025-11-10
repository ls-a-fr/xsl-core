<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\CompoundTypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\BorderRelativeWidthType;
use Lsa\Xsl\Core\Validation\Types\Xsl\ConditionalityType;
use Lsa\Xsl\Core\Validation\Types\Xsl\LengthType;

/**
 * Writing-mode Relative Equivalent of a CSS2 Property.
 * - Value:  `<border-width>` | `<length-conditional>` | inherit
 * - Initial:  medium
 * - Inherited:  no
 * - Percentages:  N/A
 * - Media:  visual
 *
 * Specifies the border-width for the end-edge.
 * See definition of property border-top-width (7.8.21 border-top-width).
 *
 * XSL modifications to the CSS definition:
 * - The following value type has been added for XSL:
 *
 * `<length-conditional>`
 * - A compound value specifying the width and any conditionality of the border for the after-edge.
 * - The .length component is a `<length>`. It may not be negative. The .conditionality component may be
 *   set to "discard" or "retain" to control if the border should be 0 or retained if its associated edge
 *   is a trailing-edge in a reference-area for areas generated from this formatting object that have an
 *   is-last value of "false". See 4.3 Spaces and Conditionality for further details. The initial value of
 *   the .conditionality component is "discard".
 *
 * Note:
 * If the border-style is "none" the computed value of the width is forced to "0pt".
 *
 * @link https://www.w3.org/TR/xsl11/#border-end-width
 * @link https://www.w3.org/TR/xsl11/#border-top-width
 */
class BorderEndWidth extends CompoundTypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('border-end-width', BorderRelativeWidthType::class, [
            'length' => LengthType::class,
            'conditionality' => ConditionalityType::class,
        ]);
    }

    public function getDefaultValue(): string
    {
        return BorderRelativeWidthType::MEDIUM;
    }
}
