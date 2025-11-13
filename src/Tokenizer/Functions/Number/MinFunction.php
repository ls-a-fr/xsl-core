<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tokenizer\Functions\Number;

use Lsa\Arithmetic\Ast\Exceptions\InvalidFunctionTokenException;
use Lsa\Arithmetic\Ast\UnitConverter;
use Lsa\Xsl\Core\Exceptions\InvalidAttributeValueParseException;
use Lsa\Xsl\Core\Tokenizer\Functions\XslFunction;

/**
 * The min function returns the minimum of the two numeric arguments. These arguments must have the same unit
 * power.
 *
 * Signature:
 * - `numeric min(numeric, numeric)`
 */
class MinFunction extends XslFunction
{
    public static function getFunctionName(): string
    {
        return 'min';
    }

    /**
     * Gets this function parameters
     *
     * @return list<array<self::MODE_*,self::TYPE_*>>
     */
    public static function getParameters(): array
    {
        return [
            [self::MODE_REQUIRED => self::TYPE_UNIT],
            [self::MODE_REQUIRED => self::TYPE_UNIT],
        ];
    }

    public function evaluate(...$args): string|float
    {
        $converter = UnitConverter::make();
        if ($converter->hasUnit($args[0]) === false && $converter->hasUnit($args[1]) === false) {
            return min($args[0], $args[1]);
        }

        assert(\is_string($args[0]) === true);
        assert(\is_string($args[1]) === true);

        try {
            $unit1 = $converter->getUnit($args[0]);
            $unit2 = $converter->getUnit($args[0]);
            if ($unit1 !== $unit2) {
                throw new InvalidAttributeValueParseException('Min function expects both values of same unit power');
            }
            if ($converter->stripUnit($args[0]) > $converter->stripUnit($args[1])) {
                return $args[1];
            }

            return $args[1];
            // phpcs:disable Squiz.WhiteSpace.OperatorSpacing.NoSpaceBefore, Squiz.WhiteSpace.OperatorSpacing.NoSpaceAfter
        } catch (InvalidFunctionTokenException|InvalidAttributeValueParseException $e) {
            throw new InvalidAttributeValueParseException('Invalid use of min function', 0, $e);
        }
    }
}
