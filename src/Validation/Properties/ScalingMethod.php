<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\ScalingMethodType;

/**
 * XSL Definition:
 * - Value:  auto | integer-pixels | resample-any-method | inherit
 * - Initial:  auto
 * - Inherited:  no
 * - Percentages:  N/A
 * - Media:  visual
 *
 * This property is used to indicate a preference in the scaling/sizing tradeoff to be used when
 * formatting bitmapped graphics.
 *
 * Note: This is defined as a preference to allow the user agent the flexibility to adapt to device
 * limitations and to accommodate over-constrained situations involving min/max dimensions and scale
 * factors.
 *
 * @link https://www.w3.org/TR/xsl11/#scaling-method
 */
class ScalingMethod extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('scaling-method', ScalingMethodType::class);
    }

    public function getDefaultValue(): string
    {
        return ScalingMethodType::AUTO;
    }
}
