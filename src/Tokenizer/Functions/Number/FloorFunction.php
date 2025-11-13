<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tokenizer\Functions\Number;

use Lsa\Arithmetic\Ast\Exceptions\InvalidFunctionTokenException;
use Lsa\Arithmetic\Ast\UnitConverter;
use Lsa\Xsl\Core\Exceptions\InvalidAttributeValueParseException;
use Lsa\Xsl\Core\Tokenizer\Functions\XslFunction;

/**
 * The floor function returns the largest (closest to positive infinity) integer that is not greater than the
 * argument. The numeric argument to this function must be of unit power zero.
 *
 * Signature:
 * - `numeric floor(numeric)`
 *
 * Note:
 * If it is necessary to use the floor function for a property where a unit power of one is expected, then an
 * expression such as: "floor(1.4in div 1.0in)*1.0in" must be used. This also applies to the ceiling, round,
 * and other such functions where a unit power of zero is required.
 */
class FloorFunction extends XslFunction
{
    public static function getFunctionName(): string
    {
        return 'floor';
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
            return floor(\floatval($args[0]));
        }
        // String
        if (UnitConverter::make()->hasUnit($args[0]) === true) {
            throw new InvalidAttributeValueParseException('Floor function must have no unit power');
        }

        if (\is_numeric($args[0]) === false || \str_ends_with($args[0], '.') === true) {
            throw new InvalidFunctionTokenException('Argument in floor() function must be numeric, found: '.$args[0]);
        }

        return floor(\floatval($args[0]));
    }
}
