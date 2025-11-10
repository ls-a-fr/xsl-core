<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Xsl\IntegerType;

/**
 * `<number>`:
 *     A positive integer. If a non-positive or non-integer value is provided, the value will be
 *     rounded to the nearest integer value greater than or equal to 1.
 *
 * @link https://www.w3.org/TR/xsl11/#hyphenation-character-count
 */
class HyphenationCharacterCountType extends Type implements Validator
{
    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new IntegerType(),
            new EnumValidator([
                self::INHERIT,
            ])
        ));
    }
}
