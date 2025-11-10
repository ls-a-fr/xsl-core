<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\Css\BorderWidthType;

/**
 * CSS2 Definition:
 * - Value:  `<border-width>` | inherit
 * - Initial:  medium
 * - Inherited:  no
 * - Percentages:  N/A
 * - Media:  visual
 *
 * Specifies the thickness of the change bar.
 *
 * @link https://www.w3.org/TR/xsl11/#border-top-width
 * @link http://www.w3.org/TR/REC-CSS2/box.html#propdef-border-top-width
 */
class ChangeBarWidth extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('change-bar-width', BorderWidthType::class);
    }

    public function getDefaultValue(): string
    {
        return BorderWidthType::MEDIUM;
    }
}
