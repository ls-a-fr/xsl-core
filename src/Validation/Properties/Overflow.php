<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\OverflowType;

/**
 * CSS2 Definition: as amended by http://www.w3.org/Style/css2-updates/REC-CSS2-19980512-errata.html#x67
 * - Value:  visible | hidden | scroll | error-if-overflow | repeat | auto | inherit
 * - Initial:  auto
 * - Inherited:  no
 * - Percentages:  N/A
 * - Media:  visual
 *
 * This property specifies whether the content of a block-level element is clipped when it overflows the
 * element's box (which is acting as a containing block for the content).
 *
 * XSL modifications to the CSS definition:
 * - Two more value are defined: error-if-overflow, repeat.
 *
 * For print media, implementations must support "auto" and "visible", as defined in this Recommendation.
 * Other values may be treated as if "auto" had been specified.
 *
 * @link https://www.w3.org/TR/xsl11/#overflow
 * @link http://www.w3.org/TR/REC-CSS2/visufx.html#propdef-overflow
 */
class Overflow extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('overflow', OverflowType::class);
    }

    public function getDefaultValue(): string
    {
        return OverflowType::AUTO;
    }
}
