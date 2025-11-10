<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\ContentHeightType;

/**
 * XSL Definition:
 * - Value:  auto | scale-to-fit | scale-down-to-fit | scale-up-to-fit | <length> | <percentage> | inherit
 * - Initial:  auto
 * - Inherited:  no
 * - Percentages:  intrinsic height
 * - Media:  visual
 *
 * Specifies the content-height of some object (e.g., an external graphic). If the value is a
 * percentage, the value of this property is the percentage applied to the intrinsic height.
 *
 * @link https://www.w3.org/TR/xsl11/#content-height
 */
class ContentHeight extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('content-height', ContentHeightType::class);
    }

    public function getDefaultValue(): string
    {
        return ContentHeightType::AUTO;
    }
}
