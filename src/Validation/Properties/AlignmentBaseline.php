<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\AlignmentBaselineType;

/**
 * XSL Definition:
 * - Value:  auto | baseline | before-edge | text-before-edge | middle | central | after-edge |
 *     text-after-edge | ideographic | alphabetic | hanging | mathematical | inherit
 * - Initial:  auto
 * - Inherited:  no
 * - Percentages:  N/A
 * - Media:  visual
 *
 * This property specifies how an object is aligned with respect to its parent. That is, to which
 * of the parent's baselines the alignment-point of this object is aligned. The alignment-adjust
 * property specifies how the alignment point is determined. It defaults to the baseline with the
 * same name as the computed value of the alignment-baseline property. That is, the position of
 * "ideographic" alignment-point in the block-progression-direction is the position of the
 * "ideographic" baseline in the baseline-table of the object being aligned.
 *
 * Implementations must support at least one of the "alignment-baseline" values defined in this Recommendation.
 *
 * @link https://www.w3.org/TR/xsl11/#alignment-baseline
 */
class AlignmentBaseline extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('alignment-baseline', AlignmentBaselineType::class);
    }

    public function getDefaultValue(): string
    {
        return AlignmentBaselineType::AUTO;
    }
}
