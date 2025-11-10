<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\ColumnGapType;

/**
 * XSL Definition:
 * Value:   `<length>` | `<percentage>` | inherit
 * Initial:     12.0pt
 * Inherited:   no
 * Percentages:     refer to width of the region being divided into columns.
 * Media:   visual
 *
 * Specifies the width of the separation between adjacent columns in a multi-column region. See the
 * description in 6.4.14 fo:region-body for further details.
 *
 * @link https://www.w3.org/TR/xsl11/#column-gap
 * @link https://www.w3.org/TR/xsl11/#fo_region-body
 */
class ColumnGap extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('column-gap', ColumnGapType::class);
    }

    public function getDefaultValue(): string
    {
        return '12pt';
    }
}
