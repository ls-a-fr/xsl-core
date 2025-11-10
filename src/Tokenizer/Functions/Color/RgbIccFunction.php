<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tokenizer\Functions\Color;

use Lsa\Arithmetic\Ast\UnitConverter;
use Lsa\Xsl\Core\Exceptions\InvalidAttributeValueParseException;
use Lsa\Xsl\Core\Tokenizer\Functions\XslFunction;
use Lsa\Xsl\Core\Traits\DataAwareFunction;
use Lsa\Xsl\Core\Validation\Types\Functions\ColorRgbIccType;

/**
 * The rgb-icc function returns a specific color from the ICC Color Profile. The color profile is specified by
 * the name parameter (the fourth parameter). This color profile must have been declared in the
 * fo:declarations formatting object using an fo:color-profile formatting object.
 *
 * The first three parameters specify a fallback color from the sRGB color space. This color is used when the
 * color profile is not available.
 *
 * The color is specified by a sequence of one or more color values (real numbers) specified after the name
 * parameter. These values are specific to the color profile.
 *
 * Signature:
 * - `color rgb-icc(numeric, numeric, numeric, NCName, numeric, numeric)`
 */
class RgbIccFunction extends XslFunction
{
    use DataAwareFunction;

    public static function getFunctionName(): string
    {
        return 'rgb-icc';
    }

    public static function getParameters(): array
    {
        return [
            [self::MODE_REQUIRED => self::TYPE_NUMERIC],
            [self::MODE_REQUIRED => self::TYPE_NUMERIC],
            [self::MODE_REQUIRED => self::TYPE_NUMERIC],
            [self::MODE_REQUIRED => self::TYPE_NC_NAME],
            [self::MODE_REQUIRED => self::TYPE_NUMERIC],
            [self::MODE_REQUIRED => self::TYPE_NUMERIC],
        ];
    }

    public function evaluate(...$args): string|float
    {
        $rgb = [
            $args[0],
            $args[1],
            $args[2],
        ];
        $profileIntent = [
            $args[4],
            $args[5],
        ];

        $rootTag = $this->getRootToken()->tag;
        $rgbIccResult = 'rgb-icc('.implode(',', $args).')';
        if ((new ColorRgbIccType())->validateWithContext($rgbIccResult, $rootTag->root(), $rootTag) === true) {
            return $rgbIccResult;
        }

        $converter = UnitConverter::make();
        foreach ([...$rgb, ...$profileIntent] as $colorValue) {
            if ($converter->hasUnit($colorValue) === true) {
                throw new InvalidAttributeValueParseException(
                    'Rgb function must have numeric arguments (real numbers)'
                );
            }
        }

        // TODO: Return the fallback. Should we?
        return 'rgb('.implode(',', $rgb).')';
    }
}
