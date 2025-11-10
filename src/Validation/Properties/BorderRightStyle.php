<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\BorderStyleType;
use Lsa\Xsl\Core\Validation\Types\Css\BorderStyleType as CssBorderStyleType;

/**
 * CSS2 Definition:
 * - Value:  `<border-style>` | inherit
 * - Initial:  none
 * - Inherited:  no
 * - Percentages:  N/A
 * - Media:  visual
 *
 * Specifies the border style for the right-edge.
 * See definition of property border-top-style (7.8.20 border-top-style).
 *
 * @link https://www.w3.org/TR/xsl11/#border-right-style
 * @link https://www.w3.org/TR/xsl11/#border-top-style
 * @link http://www.w3.org/TR/REC-CSS2/box.html#propdef-border-right-style
 */
class BorderRightStyle extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('border-right-style', BorderStyleType::class);
    }

    public function getDefaultValue(): string
    {
        return CssBorderStyleType::NONE;
    }
}
