<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\BottomType;

/**
 * CSS2 Definition: as amended by http://www.w3.org/Style/css2-updates/REC-CSS2-19980512-errata.html#x12
 * - Value:  `<length>` | `<percentage>` | auto | inherit
 * - Initial:  auto
 * - Inherited:  no
 * - Percentages:  refer to height of containing block
 * - Media:  visual
 *
 * This property specifies how far a box's bottom margin edge is offset above the bottom edge of the
 * box's containing block.
 *
 * XSL modifications to the CSS definition:
 * - See definition of property left (7.6.5 left).
 *
 * @link https://www.w3.org/TR/xsl11/#bottom
 * @link https://www.w3.org/TR/xsl11/#left
 * @link http://www.w3.org/TR/REC-CSS2/visuren.html#propdef-bottom
 */
class Bottom extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('bottom', BottomType::class);
    }

    public function getDefaultValue(): string
    {
        return BottomType::AUTO;
    }
}
