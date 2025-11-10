<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\ScaleOptionType;

/**
 * XSL Definition:
 * - Value:  width | height | inherit
 * - Initial:  width
 * - Inherited:  yes
 * - Percentages:  N/A
 * - Media:  visual
 *
 * Specifies whether the scale-factor applied to the width or the height of the graphic should be retrieved.
 *
 * @link https://www.w3.org/TR/xsl11/#scale-option
 */
class ScaleOption extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('scale-option', ScaleOptionType::class);
    }

    public function getDefaultValue(): string
    {
        return ScaleOptionType::WIDTH;
    }
}
