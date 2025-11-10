<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Xsl\LengthType;
use Lsa\Xsl\Core\Validation\Types\Xsl\PercentageType;

/**
 * Validates ColumnWidth property.
 *
 * `<length>`:
 *   The "column-width" property specifies the width of the column whose value is given by the "column-number"
 *   property. This property, if present, is ignored if the "number-columns-spanned" property is greater than 1.
 *   The "column-width" property must be specified for every column, unless the automatic table layout is used.
 *
 * Note:
 * The use of the "proportional-column-width()" function is only permitted when the fixed table layout is used.
 * If the use of proportional column widths are desired on a table of an unknown explicit width, the
 * inline-progression-dimension cannot be specified to be "auto". Instead, the width must be specified as a
 * percentage. For example, setting table-layout="fixed" and inline-progression-dimension="100%" would allow
 * proportional column widths while simultaneously creating a table as wide as possible in the current context.
 *
 * Note:
 * The result of using a percentage for the width may be unpredictable, especially when using the automatic
 * table layout.
 *
 * @see https://www.w3.org/TR/xsl11/#column-width
 */
class ColumnWidthType extends Type implements Validator
{
    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new LengthType(),
            new PercentageType()
        ));
    }
}
