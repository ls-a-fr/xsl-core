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
 * Specifies the width of the padding on the top-edge of a block-area or inline-area. Unlike margin
 * properties, values for padding properties cannot be negative.
 *
 * @link https://www.w3.org/TR/xsl11/#padding-top
 * @link http://www.w3.org/TR/REC-CSS2/box.html#propdef-padding-top
 */
class PaddingTop extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('padding-top', PaddingAbsoluteType::class);
    }

    public function getDefaultValue(): string
    {
        return '0pt';
    }
}
