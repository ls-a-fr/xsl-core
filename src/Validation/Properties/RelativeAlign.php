<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\RelativeAlignType;

/**
 * XSL Definition:
 * - Value:  before | baseline | inherit
 * - Initial:  before
 * - Inherited:  yes
 * - Percentages:  N/A
 * - Media:  visual
 *
 * This property specifies the alignment, in the block-progression-direction, between two or more areas. If
 * the "display-align" property applies to this formatting object and has a value other than "auto" this
 * property is ignored.
 *
 * @link https://www.w3.org/TR/xsl11/#relative-align
 */
class RelativeAlign extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('relative-align', RelativeAlignType::class);
    }

    public function getDefaultValue(): string
    {
        return RelativeAlignType::BEFORE;
    }
}
