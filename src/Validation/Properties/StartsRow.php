<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\StartsRowType;

/**
 * XSL Definition:
 * - Value:  true | false
 * - Initial:  false
 * - Inherited:  no
 * - Percentages:  N/A
 * - Media:  visual
 *
 * Specifies whether this cell starts a row. This is only allowed for table-cells that are not in table-rows.
 *
 * Note:
 * The "starts-row" and "ends-row" properties with a "true" value are typically used when the input data does
 * not have elements containing the cells in each row, but instead, for example, each row starts at elements
 * of a particular type.
 *
 * @link https://www.w3.org/TR/xsl11/#starts-row
 */
class StartsRow extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('starts-row', StartsRowType::class);
    }

    public function getDefaultValue(): string
    {
        return StartsRowType::FALSE;
    }
}
