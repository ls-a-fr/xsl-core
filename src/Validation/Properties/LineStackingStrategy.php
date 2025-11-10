<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\LineStackingStrategyType;

/**
 * XSL Definition:
 * - Value:  line-height | font-height | max-height | inherit
 * - Initial:  max-height
 * - Inherited:  yes
 * - Percentages:  N/A
 * - Media:  visual
 *
 * Selects the strategy for positioning adjacent lines, relative to each other.
 *
 * Implementations must support at least the "max-height" and "font-height" values defined in this
 * Recommendation, and may treat "line-height" as if "max-height" had been specified.
 *
 * @link https://www.w3.org/TR/xsl11/#line-stacking-strategy
 */
class LineStackingStrategy extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('line-stacking-strategy', LineStackingStrategyType::class);
    }

    public function getDefaultValue(): string
    {
        return LineStackingStrategyType::MAX_HEIGHT;
    }
}
