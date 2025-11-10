<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\IntrusionDisplaceType;

/**
 * XSL Definition:
 * - Value:  auto | none | line | indent | block | inherit
 * - Initial:  auto
 * - Inherited:  yes
 * - Percentages:  N/A
 * - Media:  visual
 *
 * This property determines the displacement strategy in the presence of intrusions.
 *
 * Note: Displacing the start edge (and/or end edge) of a block, necessarily displaces
 * the start edge (and/or end edge) of all lines and blocks contained within that block.
 *
 * @link https://www.w3.org/TR/xsl11/#intrusion-displace
 */
class IntrusionDisplace extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('intrusion-displace', IntrusionDisplaceType::class);
    }

    public function getDefaultValue(): string
    {
        return IntrusionDisplaceType::AUTO;
    }
}
