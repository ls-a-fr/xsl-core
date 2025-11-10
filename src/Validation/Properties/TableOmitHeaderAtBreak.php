<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\TableOmitHeaderAtBreakType;

/**
 * XSL Definition:
 * - Value:  true | false
 * - Initial:  false
 * - Inherited:  no
 * - Percentages:  N/A
 * - Media:  visual
 *
 * The "table-omit-header-at-break" property specifies if a table whose first area is not at the
 * beginning of an area produced by the table should start with the content of the fo:table-header
 * formatting object or not.
 *
 * @link https://www.w3.org/TR/xsl11/#table-omit-header-at-break
 */
class TableOmitHeaderAtBreak extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('table-omit-header-at-break', TableOmitHeaderAtBreakType::class);
    }

    public function getDefaultValue(): string
    {
        return TableOmitHeaderAtBreakType::FALSE;
    }
}
