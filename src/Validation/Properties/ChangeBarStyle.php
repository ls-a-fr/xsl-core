<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\Css\BorderStyleType;
use Lsa\Xsl\Core\Validation\Types\Css\BorderStyleType as CssBorderStyleType;

/**
 * XSL Definition:
 * - Value:  `<border-style>`
 * - Initial:  none
 * - Inherited:  yes
 * - Percentages:  N/A
 * - Media:  visual
 *
 * Specifies the style of the change bar.
 *
 * See definition of property border-top-style (7.8.20 border-top-style).
 *
 * Note:
 * The style of any change bar is determined by the value of this property at the fo:change-bar-begin that
 * starts the change bar; changes to this property after that do not affect the style of the change bar begin
 * generated.
 *
 * Note:
 * Conforming implementations may interpret 'dotted', 'dashed', 'double', 'groove', 'ridge', 'inset', and
 * 'outset' to be 'solid'.
 *
 * @link https://www.w3.org/TR/xsl11/#change-bar-style
 * @link https://www.w3.org/TR/xsl11/#border-top-style
 */
class ChangeBarStyle extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('change-bar-style', BorderStyleType::class);
    }

    public function getDefaultValue(): string
    {
        return CssBorderStyleType::NONE;
    }
}
