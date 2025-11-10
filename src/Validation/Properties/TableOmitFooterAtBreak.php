<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\TableOmitFooterAtBreakType;

/**
 * XSL Definition:
 * - Value:  true | false
 * - Initial:  false
 * - Inherited:  no
 * - Percentages:  N/A
 * - Media:  visual
 *
 * The "table-omit-footer-at-break" property specifies if a table whose last area is not at
 * the end of an area produced by the table should end with the content of the
 * fo:table-footer formatting object or not.
 *
 * @link https://www.w3.org/TR/xsl11/#table-omit-footer-at-break
 */
class TableOmitFooterAtBreak extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('table-omit-footer-at-break', TableOmitFooterAtBreakType::class);
    }

    public function getDefaultValue(): string
    {
        return TableOmitFooterAtBreakType::FALSE;
    }
}
