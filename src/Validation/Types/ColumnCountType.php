<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Xsl\NumberType;

/**
 * Validates the ColumnCount property.
 *
 * `<number>`:
 *   A positive integer. If a non-positive or non-integer value is provided, the value will be rounded to the
 *   nearest integer value greater than or equal to 1.
 *
 * @see https://www.w3.org/TR/xsl11/#column-count
 */
class ColumnCountType extends Type implements Validator
{
    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new NumberType(),
            new EnumValidator([
                self::INHERIT,
            ])
        ));
    }
}
