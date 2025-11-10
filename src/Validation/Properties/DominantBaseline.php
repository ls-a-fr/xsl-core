<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\DominantBaselineType;

/**
 * XSL Definition:
 * - Value:  auto | use-script | no-change | reset-size | ideographic | alphabetic | hanging |
 *     mathematical | central | middle | text-after-edge | text-before-edge | inherit
 * - Initial:  auto
 * - Inherited:  no (see prose)
 * - Percentages:  N/A
 * - Media:  visual
 *
 * The "dominant-baseline" property is used to determine or re-determine a scaled-baseline-table. A
 * scaled-baseline-table is a compound value with three components: a baseline-identifier for the
 * dominant-baseline, a derived baseline-table and a baseline-table font-size. Some values of the
 * property re-determine all three values; other only re-establish the baseline-table font-size. Although
 * this property is not inherited, components of the scaled-baseline-table propagate to child formatting
 * objects if the "auto" value is used on these. When the initial value, "auto", would give an undesired
 * result, this property can be used to explicitly set the desired scaled-baseline-table.
 *
 * Note: The derived baseline-table is constructed using a baseline-table in the font that corresponds to
 * the computed value of the "writing-mode".
 *
 * If there is no baseline-table in the nominal font or if the baseline-table lacks an entry for the
 * desired baseline, then the User Agent may use heuristics to determine the position of the desired
 * baseline.
 * Implementations must support at least one of the "dominant-baseline" values defined in this Recommendation.
 *
 * @link https://www.w3.org/TR/xsl11/#dominant-baseline
 */
class DominantBaseline extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('dominant-baseline', DominantBaselineType::class);
    }

    public function getDefaultValue(): string
    {
        return DominantBaselineType::AUTO;
    }
}
