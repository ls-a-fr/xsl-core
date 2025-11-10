<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tokenizer\Functions\Number;

use Lsa\Arithmetic\Ast\Exceptions\InvalidFunctionTokenException;
use Lsa\Arithmetic\Ast\UnitConverter;
use Lsa\Xsl\Core\Tokenizer\Functions\XslFunction;

/**
 * The abs function returns the absolute value of the numeric argument. That is, if the numeric argument is
 * negative, it returns the negation of the argument.
 *
 * Signature:
 * - `numeric abs(numeric)`
 */
class AbsFunction extends XslFunction
{
    public static function getFunctionName(): string
    {
        return 'abs';
    }

    public static function getParameters(): array
    {
        return [
            [self::MODE_REQUIRED => self::TYPE_UNIT],
        ];
    }

    public function evaluate(...$args): string|float
    {
        $converter = UnitConverter::make();
        if ($converter->hasUnit($args[0]) === false) {
            if (\is_numeric($args[0]) === false || \str_ends_with($args[0], '.') === true) {
                throw new InvalidFunctionTokenException('Argument in abs() function must be numeric, found: '.$args[0]);
            }

            return abs(\floatval($args[0]));
        }

        $unit = $converter->getUnit($args[0]);

        return abs($converter->stripUnit($args[0])).$unit;
    }
}
