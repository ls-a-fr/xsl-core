<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\ShorthandTypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\BorderMultiStyleType;

/**
 * CSS2 Definition:
 * - Value:  `<border-style>{1,4}` | inherit
 * - Initial:  see individual properties
 * - Inherited:  no
 * - Percentages:  N/A
 * - Media:  visual
 * CSS2 Reference: "border-style" property
 *
 * The "border-style" property sets the style of the four borders.
 * It can have from one to four values, and the values are set on the different sides.
 *
 * @link https://www.w3.org/TR/xsl11/#border-style
 * @link http://www.w3.org/TR/REC-CSS2/box.html#propdef-border-style
 */
class BorderStyle extends ShorthandTypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct(
            'border-style',
            BorderMultiStyleType::class,
            [
                BorderBottomStyle::class,
                BorderLeftStyle::class,
                BorderRightStyle::class,
                BorderTopStyle::class,
            ]
        );
    }

    public function getDefaultValue(): string
    {
        return (new BorderBottomStyle())->getDefaultValue();
    }
}
