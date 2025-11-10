<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\ScalingType;

/**
 * XSL Definition:
 * - Value:  uniform | non-uniform | inherit
 * - Initial:  uniform
 * - Inherited:  no
 * - Percentages:  N/A
 * - Media:  visual
 *
 * Specifies whether scaling needs to preserve the intrinsic aspect ratio.
 *
 * @link https://www.w3.org/TR/xsl11/#scaling
 */
class Scaling extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('scaling', ScalingType::class);
    }

    public function getDefaultValue(): string
    {
        return ScalingType::UNIFORM;
    }
}
