<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\RichnessType;

/**
 * CSS2 Reference: "richness" property
 * - Value:  `<number>` | inherit
 * - Initial:  50
 * - Inherited:  yes
 * - Percentages:  N/A
 * - Media:  aural
 *
 * The richness, or brightness, of the speaking voice. A rich voice will "carry" in a large room,
 * a smooth voice will not. (The term "smooth" refers to how the wave form looks when drawn.).
 *
 * @link https://www.w3.org/TR/xsl11/#richness
 * @link https://www.w3.org/TR/CSS2/aural.html#propdef-richness
 */
class Richness extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('richness', RichnessType::class);
    }

    public function getDefaultValue(): string
    {
        return '50';
    }
}
