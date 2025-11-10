<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\IntrinsicScaleValueType;

/**
 * XSL Definition:
 * - Value:  `<percentage>` | inherit
 * - Initial:  100%
 * - Inherited:  yes
 * - Percentages:  user defined
 * - Media:  visual
 *
 * Specifies the scale factor that the intrinsic size corresponds to.
 *
 * @link https://www.w3.org/TR/xsl11/#intrinsic-scale-value
 */
class IntrinsicScaleValue extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('intrinsic-scale-value', IntrinsicScaleValueType::class);
    }

    public function getDefaultValue(): string
    {
        return '100%';
    }
}
