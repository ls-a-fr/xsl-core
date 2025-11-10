<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\ExtentType;

/**
 * XSL Definition:
 * Value:  `<length>` | `<percentage>` | inherit
 * Initial:  0.0pt
 * Inherited:  no
 * Percentages:  refer to the corresponding block-progression-dimension or inline-progression-dimension
 *    of the page-viewport-area.
 * Media:  visual
 * Specifies the inline-progression-dimension of the region-start or region-end or the
 * block-progression-dimension of the region-before or region-after.
 *
 * @link https://www.w3.org/TR/xsl11/#extent
 */
class Extent extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('extent', ExtentType::class);
    }

    public function getDefaultValue(): string
    {
        return '0.0pt';
    }
}
