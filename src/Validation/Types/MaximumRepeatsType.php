<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Xsl\NumberType;

/**
 * Validates MaximumRepeats property.
 *
 * `<number>`:
 * The maximum number of pages in the sub-sequence.
 * The value is an integer greater than or equal to 0.
 * If a fractional value or a value less than 0 is specified, it will be rounded to the nearest
 * integer greater than or equal to 0.
 * A value of 0 indicates this master-reference will not be used.
 *
 * @link https://www.w3.org/TR/xsl11/#maximum-repeats
 */
class MaximumRepeatsType extends Type implements Validator
{
    /**
     * No constraint is specified.
     */
    public const NO_LIMIT = 'no-limit';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new NumberType(),
            new EnumValidator([
                self::NO_LIMIT,
                self::INHERIT,
            ])
        ));
    }
}
