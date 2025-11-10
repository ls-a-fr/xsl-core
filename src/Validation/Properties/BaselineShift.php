<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\BaselineShiftType;

/**
 * XSL Definition:
 * - Value:  baseline | sub | super | <percentage> | <length> | inherit
 * - Initial:  baseline
 * - Inherited:  no
 * - Percentages:  refers to the "line-height" of the parent area
 * - Media:  visual
 *
 * The "baseline-shift" property allows repositioning of the dominant-baseline relative to the
 * dominant-baseline of the parent area. The shifted object might be a subscript or superscript.
 * Within the shifted object, the whole baseline-table is offset; not just a single baseline.
 * The amount of the shift is determined from information from the parent area, the subscript or
 * superscript offset from the nominal-font of the parent area, percent of the "line-height" of
 * the parent area or an absolute value.
 *
 * When the value of "baseline-shift" is other than "0", then the baseline-table font-size component
 * of the "dominant-baseline" property is re-computed to use the "font-size" applicable to the
 * formatting object on which the non-zero "baseline-shift" property is specified.
 *
 * @link https://www.w3.org/TR/xsl11/#baseline-shift
 * @link http://www.w3.org/TR/REC-CSS2/colors.html#propdef-background-repeat
 */
class BaselineShift extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('baseline-shift', BaselineShiftType::class);
    }

    public function getDefaultValue(): string
    {
        return BaselineShiftType::BASELINE;
    }
}
