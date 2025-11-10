<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\LeftType;

/**
 * CSS2 Definition: as amended by http://www.w3.org/Style/css2-updates/REC-CSS2-19980512-errata.html#x12
 * - Value:  `<length>` | `<percentage>` | auto | inherit
 * - Initial:  auto
 * - Inherited:  no
 * - Percentages:  refer to height of containing block
 * - Media:  visual
 *
 * This property specifies how far a box's left margin edge is offset above the left edge of the
 * box's containing block.
 *
 * XSL modifications to the CSS definition:
 * - These properties set the position of the content-rectangle of the associated area.
 * - The left, right, top, and bottom are interpreted in the prevailing coordinate system (established by
 *   the nearest ancestor reference area) and not relative to the "containing block" as in CSS.
 * - If both "left" and "right" have a value other than "auto", then if the "width" is "auto" the width of
 *   the content-rectangle is overridden; else the geometry is overconstrained and is resolved in accordance
 *   with 5.3.4 Overconstrained Geometry. Similarly, if both "top" and "bottom" have a value other than
 *   "auto", then if the "height" is "auto" the height of the content-rectangle is overridden; else the
 *   geometry is overconstrained and is resolved in accordance with 5.3.4 Overconstrained Geometry.
 *
 * @link https://www.w3.org/TR/xsl11/#left
 * @link http://www.w3.org/TR/REC-CSS2/visuren.html#propdef-left
 * @link https://www.w3.org/TR/xsl11/#overcons_geom
 */
class Left extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('left', LeftType::class);
    }

    public function getDefaultValue(): string
    {
        return LeftType::AUTO;
    }
}
