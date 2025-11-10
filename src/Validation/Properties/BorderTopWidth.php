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
 * Specifies the border width for the top-edge.
 * The border width properties specify the width of the border area. The properties defined in this section
 * refer to the <border-width> value type, which may take one of the specified values.
 *
 * The interpretation of the first three values depends on the user agent. The following relationships must
 * hold, however:
 * - 'thin' <= 'medium' <= 'thick'.
 * - Furthermore, these widths must be constant throughout a document.
 *
 * @link https://www.w3.org/TR/xsl11/#border-top-width
 * @link http://www.w3.org/TR/REC-CSS2/box.html#propdef-border-top-width
 */
class BorderTopWidth extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('border-top-width', BorderWidthType::class);
    }

    public function getDefaultValue(): string
    {
        return CssBorderWidthType::MEDIUM;
    }
}
