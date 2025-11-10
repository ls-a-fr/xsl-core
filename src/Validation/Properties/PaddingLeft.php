<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\PaddingAbsoluteType;

/**
 * Writing-mode Relative Equivalent of a CSS2 Property.
 * - Value:  `<padding-width>` | inherit
 * Initial:  0pt
 * Inherited:  no
 * Percentages:  refer to width of containing block
 * Media:  visual
 *
 * Specifies the width of the padding on the left-edge of a block-area or inline-area.
 * See definition of property padding-top (7.8.35 padding-top).
 *
 * @link https://www.w3.org/TR/xsl11/#padding-left
 * @link http://www.w3.org/TR/REC-CSS2/box.html#propdef-padding-left
 * @link https://www.w3.org/TR/xsl11/#padding-top
 */
class PaddingLeft extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('padding-left', PaddingAbsoluteType::class);
    }

    public function getDefaultValue(): string
    {
        return '0pt';
    }
}
