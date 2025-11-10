<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\TableLayoutType;

/**
 * CSS2 Definition:
 * - Value:  auto | fixed | inherit
 * - Initial:  auto
 * - Inherited:  no
 * - Percentages:  N/A
 * - Media:  visual
 *
 * The 'table-layout' property controls the algorithm used to lay out the table cells, rows, and columns.
 *
 * @link https://www.w3.org/TR/xsl11/#table-layout
 * @link http://www.w3.org/TR/REC-CSS2/tables.html#propdef-table-layout
 */
class TableLayout extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('table-layout', TableLayoutType::class);
    }

    public function getDefaultValue(): string
    {
        return TableLayoutType::AUTO;
    }
}
