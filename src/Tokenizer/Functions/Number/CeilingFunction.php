<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tokenizer\Functions\Number;

use Lsa\Arithmetic\Ast\Exceptions\InvalidFunctionTokenException;
use Lsa\Arithmetic\Ast\UnitConverter;
use Lsa\Xsl\Core\Exceptions\InvalidAttributeValueParseException;
use Lsa\Xsl\Core\Tokenizer\Functions\XslFunction;

/**
 * The ceiling function returns the smallest (closest to negative infinity) integer that is not less than the
 * argument. The numeric argument to this function must be of unit power zero.
 *
 * Signature:
 * - `numeric ceiling(numeric)`
 *
 * @see Lsa\Xsl\Core\Tokenizer\Functions\FloorFunction
 */
class CeilingFunction extends XslFunction
{
    public static function getFunctionName(): string
    {
        return 'ceiling';
    }

    /**
     * Gets this function parameters
     *
     * @return list<array<self::MODE_*,self::TYPE_*>>
     */
    public static function getParameters(): array
    {
        return [
            [self::MODE_REQUIRED => self::TYPE_NUMERIC],
        ];
    }

    public function evaluate(...$args): string|float
    {
        // Float
        if (\is_float($args[0]) === true) {
            return ceil($args[0]);
        }
        // String
        if (UnitConverter::make()->hasUnit($args[0]) === true) {
            throw new InvalidAttributeValueParseException('Ceiling function must have no unit power');
        }

        if (\is_numeric($args[0]) === false || \str_ends_with($args[0], '.') === true) {
            throw new InvalidFunctionTokenException('Argument in floor() function must be numeric, found: '.$args[0]);
        }

        return ceil(\floatval($args[0]));
    }
}
