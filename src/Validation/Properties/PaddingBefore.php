<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\CompoundTypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\PaddingRelativeType;
use Lsa\Xsl\Core\Validation\Types\Xsl\ConditionalityType;
use Lsa\Xsl\Core\Validation\Types\Xsl\LengthType;

/**
 * Writing-mode Relative Equivalent of a CSS2 Property.
 * - Value:  `<padding-width>` | `<length-conditional>` | inherit
 * Initial:  0pt
 * Inherited:  no
 * Percentages:  refer to width of containing block
 * Media:  visual
 *
 * Specifies the width of the padding on the before-edge of a block-area or inline-area.
 * See definition of property padding-top (7.8.35 padding-top).
 *
 * XSL modifications to the CSS definition:
 * The following value type has been added for XSL: `<length-conditional>`
 *
 * @link https://www.w3.org/TR/xsl11/#padding-before
 */
class PaddingBefore extends CompoundTypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('padding-before', PaddingRelativeType::class, [
            'length' => LengthType::class,
            'conditionality' => ConditionalityType::class,
        ]);
    }

    public function getDefaultValue(): string
    {
        return '0pt';
    }
}
