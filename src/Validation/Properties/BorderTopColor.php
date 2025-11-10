<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xsl\Core\Contracts\HasDefaultValueWithContext;
use Lsa\Xsl\Core\Validation\Properties\Virtual\SingleColor;
use Lsa\Xsl\Core\Validation\Types\BorderColorType;

/**
 * CSS2 Definition:
 * - Value:  <color> | transparent | inherit
 * - Initial:  the value of the 'color' property
 * - Inherited:  no
 * - Percentages:  N/A
 * - Media:  visual
 *
 * Specifies the border color for the top-edge.
 * See definition of property border-top-color (7.8.19 border-top-color).
 *
 * @link https://www.w3.org/TR/xsl11/#border-top-color
 * @link https://www.w3.org/TR/xsl11/#border-top-color
 *
 * @linkhttp://www.w3.org/TR/REC-CSS2/box.html#propdef-border-top-color
 */
class BorderTopColor extends SingleColor implements HasDefaultValueWithContext
{
    public function __construct()
    {
        parent::__construct('border-top-color', BorderColorType::class);
    }
}
