<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\EmptyCellsType;

/**
 * CSS2 Definition: as amended by http://www.w3.org/Style/css2-updates/REC-CSS2-19980512-errata.html#x79
 * - Value:  show | hide | inherit
 * - Initial:  show
 * - Inherited:  yes
 * - Percentages:  N/A
 * - Media:  visual
 *
 * In the separated borders model, this property controls the rendering of borders around cells and the
 * rendering of the background of cells that have no visible content. Empty cells and cells with the
 * "visibility" property set to "hidden" are considered to have no visible content. Visible content
 * includes "&nbsp;" (non-breaking-space) and other whitespace except ASCII CR ("\0D"), LF ("\0A"),
 * tab ("\09"), and space ("\20").
 *
 * @link https://www.w3.org/TR/xsl11/#empty-cells
 * @link http://www.w3.org/TR/REC-CSS2/tables.html#propdef-empty-cells
 */
class EmptyCells extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('empty-cells', EmptyCellsType::class);
    }

    public function getDefaultValue(): string
    {
        return EmptyCellsType::SHOW;
    }
}
