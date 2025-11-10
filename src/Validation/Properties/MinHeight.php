<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\MinHeightType;

/**
 * CSS2 Definition:
 * - Value:  `<length>` | `<percentage>` | inherit
 * Initial:  0pt
 * Inherited:  no
 * Percentages:  refer to height of containing block
 * Media:  visual
 *
 * These two properties ["max-height" and "min-height"] allow authors to constrain box heights to a certain
 * range.
 *
 * XSL modifications to the CSS definition:
 * - In XSL, this property is mapped to either "inline-progression-dimension" or "block-progression-dimension",
 *   based on the applicable values of the "writing-mode" and "reference-orientation" properties. Details on
 *   the mapping are given in 5 Property Refinement / Resolution.
 *
 * @link https://www.w3.org/TR/xsl11/#min-height
 * @link http://www.w3.org/TR/REC-CSS2/visudet.html#propdef-min-height
 * @link https://www.w3.org/TR/xsl11/#refinement
 */
class MinHeight extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('min-height', MinHeightType::class);
    }

    public function getDefaultValue(): string
    {
        return '0pt';
    }
}
