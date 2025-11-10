<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\AllowedHeightScaleType;

/**
 * XSL Definition:
 * - Value:  [ any | `<percentage>` ]* | inherit
 * - Initial:  any
 * - Inherited:  yes
 * - Percentages:  intrinsic height
 * - Media:  visual
 *
 * A sequence of tokens, each specifying an allowed scale-factor value.
 *
 * Specifies a list of constraints on the scale-factor values that may be used when scaling a
 * graphic in the height direction. The list is unordered, except that an "any" value is
 * considered last and is only used if the scaling constraints cannot be satisfied using any of
 * the other specified values.
 *
 * @link https://www.w3.org/TR/xsl11/#allowed-height-scale
 */
class AllowedHeightScale extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('allowed-height-scale', AllowedHeightScaleType::class);
    }

    public function getDefaultValue(): string
    {
        return AllowedHeightScaleType::ANY;
    }
}
