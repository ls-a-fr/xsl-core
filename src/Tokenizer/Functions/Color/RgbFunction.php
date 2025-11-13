<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tokenizer\Functions\Color;

use Lsa\Arithmetic\Ast\UnitConverter;
use Lsa\Xsl\Core\Exceptions\InvalidAttributeValueParseException;
use Lsa\Xsl\Core\Tokenizer\Functions\XslFunction;
use Lsa\Xsl\Core\Validation\Types\Functions\ColorRgbType;

/**
 * The rgb function returns a specific color from the RGB color space. The parameters to this function must be
 * numerics (real numbers) with a length power of zero.
 *
 * Signature:
 * - `color rgb(numeric, numeric, numeric)`
 */
class RgbFunction extends XslFunction
{
    public static function getFunctionName(): string
    {
        return 'rgb';
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
            [self::MODE_REQUIRED => self::TYPE_NUMERIC],
            [self::MODE_REQUIRED => self::TYPE_NUMERIC],
        ];
    }

    public function evaluate(...$args): string|float
    {
        $result = 'rgb('.implode(',', $args).')';
        if ((new ColorRgbType())->validate($result) === false) {
            throw new InvalidAttributeValueParseException('Rgb function has invalid arguments');
        }

        $converter = UnitConverter::make();
        for ($i = 0; $i < 3; $i++) {
            if (isset($args[$i]) === false) {
                throw new InvalidAttributeValueParseException('Rgb function must have three arguments');
            }
            $value = $args[$i];
            if ($converter->hasUnit($value) === true) {
                throw new InvalidAttributeValueParseException(
                    'Rgb function must have numeric arguments (real numbers)'
                );
            }
        }

        return $result;
    }
}
