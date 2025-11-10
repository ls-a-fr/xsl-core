<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\DisplayAlignType;

/**
 * XSL Definition:
 * - Value:  auto | before | center | after | inherit
 * - Initial:  auto
 * - Inherited:  yes
 * - Percentages:  N/A
 * - Media:  visual
 *
 * This property specifies the alignment, in the block-progression-direction, of the areas that are the
 * children of a reference-area.
 *
 * @link https://www.w3.org/TR/xsl11/#display-align
 */
class DisplayAlign extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('display-align', DisplayAlignType::class);
    }

    public function getDefaultValue(): string
    {
        return DisplayAlignType::AUTO;
    }
}
