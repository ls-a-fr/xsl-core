<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\LineHeightShiftAdjustmentType;

/**
 * XSL Definition:
 * - Value:  consider-shifts | disregard-shifts | inherit
 * - Initial:  consider-shifts
 * - Inherited:  yes
 * - Percentages:  N/A
 * - Media:  visual
 *
 * This property is used to control whether the line-height is adjusted for content that has a
 * baseline-shift.
 *
 * Note: This property can be used to prevent superscript and subscript characters from disrupting
 * the line-spacing.
 *
 * @link https://www.w3.org/TR/xsl11/#line-height-shift-adjustment
 */
class LineHeightShiftAdjustment extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('line-height-shift-adjustment', LineHeightShiftAdjustmentType::class);
    }

    public function getDefaultValue(): string
    {
        return LineHeightShiftAdjustmentType::CONSIDER_SHIFTS;
    }
}
