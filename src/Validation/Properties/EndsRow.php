<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\EndsRowType;

/**
 * XSL Definition:
 * - Value:  true | false
 * - Initial:  false
 * - Inherited:  no
 * - Percentages:  N/A
 * - Media:  visual
 *
 * Specifies whether this cell ends a row. This is only allowed for table-cells that are not in table-rows.
 *
 * @link https://www.w3.org/TR/xsl11/#ends-row
 */
class EndsRow extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('ends-row', EndsRowType::class);
    }

    public function getDefaultValue(): string
    {
        return EndsRowType::FALSE;
    }
}
