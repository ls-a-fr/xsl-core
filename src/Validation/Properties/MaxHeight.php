<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\MaxHeightType;

/**
 * CSS2 Definition:
 * - Value:  `<length>` | `<percentage>` | none | inherit
 * Initial:  none
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
 * @link https://www.w3.org/TR/xsl11/#max-height
 * @link http://www.w3.org/TR/REC-CSS2/visudet.html#propdef-max-height
 * @link https://www.w3.org/TR/xsl11/#refinement
 */
class MaxHeight extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('max-height', MaxHeightType::class);
    }

    public function getDefaultValue(): string
    {
        return MaxHeightType::NONE;
    }
}
