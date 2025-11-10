<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xsl\Core\Contracts\HasDefaultValueWithContext;
use Lsa\Xsl\Core\Validation\Properties\Virtual\SingleColor;
use Lsa\Xsl\Core\Validation\Types\BorderColorType;

/**
 * Writing-mode Relative Equivalent of a CSS2 Property.
 * - Value:  <color> | transparent | inherit
 * - Initial:  the value of the 'color' property
 * - Inherited:  no
 * - Percentages:  N/A
 * - Media:  visual
 *
 * Specifies the color of the border on the end-edge of a block-area or inline-area.
 * See definition of property border-top-color (7.8.19 border-top-color).
 *
 * @link https://www.w3.org/TR/xsl11/#border-end-color
 * @link https://www.w3.org/TR/xsl11/#border-top-color
 */
class BorderEndColor extends SingleColor implements HasDefaultValueWithContext
{
    public function __construct()
    {
        parent::__construct('border-end-color', BorderColorType::class);
    }
}
