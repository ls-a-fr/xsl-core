<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\MinWidthType;

/**
 * CSS2 Definition:
 * - Value:  `<length>` | `<percentage>` | inherit
 * Initial:  0pt
 * Inherited:  no
 * Percentages:  refer to width of containing block
 * Media:  visual
 *
 * These two properties ["max-width" and "min-width"] allow authors to constrain box widths to a certain
 * range.
 *
 * XSL modifications to the CSS definition:
 * - In XSL, this property is mapped to either "inline-progression-dimension" or "block-progression-dimension",
 *   based on the applicable values of the "writing-mode" and "reference-orientation" properties. Details on
 *   the mapping are given in 5 Property Refinement / Resolution.
 *
 * @link https://www.w3.org/TR/xsl11/#min-width
 * @link http://www.w3.org/TR/REC-CSS2/visudet.html#propdef-min-width
 * @link https://www.w3.org/TR/xsl11/#refinement
 */
class MinWidth extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('min-width', MinWidthType::class);
    }

    public function getDefaultValue(): string
    {
        return '0pt';
    }
}
