<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\BorderWidthType;
use Lsa\Xsl\Core\Validation\Types\Css\BorderWidthType as CssBorderWidthType;

/**
 * CSS2 Definition:
 * - Value:  `<border-width>` | inherit
 * - Initial:  medium
 * - Inherited:  no
 * - Percentages:  N/A
 * - Media:  visual
 *
 * Specifies the border width for the right-edge.
 * See definition of property border-top-width (7.8.21 border-top-width).
 *
 * @link https://www.w3.org/TR/xsl11/#border-right-width
 * @link https://www.w3.org/TR/xsl11/#border-top-width
 * @link http://www.w3.org/TR/REC-CSS2/box.html#propdef-border-right-width
 */
class BorderRightWidth extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('border-right-width', BorderWidthType::class);
    }

    public function getDefaultValue(): string
    {
        return CssBorderWidthType::MEDIUM;
    }
}
