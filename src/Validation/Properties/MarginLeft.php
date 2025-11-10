<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\Css\MarginWidthType;

/**
 * CSS2 Definition:
 * - Value:  <margin-width> | inherit
 * - Initial:  0pt
 * - Inherited:  no
 * - Percentages:  refer to width of containing block
 * - Media:  visual
 *
 * Sets the left margin of a box.
 *
 * XSL modifications to the CSS definition:
 * - Margin-left is provided for compatibility with CSS.
 * - Details on the mapping of CSS "margin" properties for XSL are given in 5 Property Refinement / Resolution.
 *
 * @link https://www.w3.org/TR/xsl11/#margin-left
 * @link http://www.w3.org/TR/REC-CSS2/box.html#propdef-margin-left
 * @link https://www.w3.org/TR/xsl11/#refinement
 */
class MarginLeft extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('margin-left', MarginWidthType::class);
    }

    public function getDefaultValue(): string
    {
        return '0pt';
    }
}
