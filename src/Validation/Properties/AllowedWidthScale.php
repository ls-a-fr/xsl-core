<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\AllowedWidthScaleType;

/**
 * XSL Definition:
 * - Value:  [ any | `<percentage>` ]* | inherit
 * - Initial:  any
 * - Inherited:  yes
 * - Percentages:  intrinsic width
 * - Media:  visual
 *
 * A sequence of tokens, each specifying an allowed scale-factor value.
 * Specifies a list of constraints on the scale-factor values that may be used when scaling a
 * graphic in the width direction. The list is unordered, except that an "any" value is
 * considered last and is only used if the scaling constraints cannot be satisfied using any of
 * the other specified values.
 *
 * Note: It is recommended to include "any" in the list for applications where scrolling is not
 * desired or available.
 *
 * @link https://www.w3.org/TR/xsl11/#allowed-width-scale
 */
class AllowedWidthScale extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('allowed-width-scale', AllowedWidthScaleType::class);
    }

    public function getDefaultValue(): string
    {
        return AllowedWidthScaleType::ANY;
    }
}
