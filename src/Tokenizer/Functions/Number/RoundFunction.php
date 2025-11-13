<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tokenizer\Functions\Number;

use Lsa\Arithmetic\Ast\Exceptions\InvalidFunctionTokenException;
use Lsa\Arithmetic\Ast\UnitConverter;
use Lsa\Xsl\Core\Exceptions\InvalidAttributeValueParseException;
use Lsa\Xsl\Core\Tokenizer\Functions\XslFunction;

/**
 * The round function returns the integer that is closest to the argument. If there are two such numbers, then
 * the one that is closest to positive infinity is returned. The numeric argument to this function must be of
 * unit power zero.
 *
 * Signature:
 * - `numeric round(numeric)`
 */
class RoundFunction extends XslFunction
{
    public static function getFunctionName(): string
    {
        return 'round';
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
        if (UnitConverter::make()->hasUnit($args[0]) === true) {
            throw new InvalidAttributeValueParseException('Round function must have no unit power');
        }
        if (
            \is_string($args[0]) === true
            && (\is_numeric($args[0]) === false || \str_ends_with($args[0], '.') === true)
        ) {
            throw new InvalidFunctionTokenException('Argument in abs() function must be numeric, found: '.$args[0]);
        }

        // The round function returns the integer that is closest to the argument. If there are two such numbers, then
        // the one that is closest to positive infinity is returned.
        $asFloat = \floatval($args[0]);
        if ($asFloat < 0) {
            return round(\floatval($args[0]), 0, PHP_ROUND_HALF_DOWN);
        }

        return round(\floatval($args[0]), 0, PHP_ROUND_HALF_UP);
    }
}
