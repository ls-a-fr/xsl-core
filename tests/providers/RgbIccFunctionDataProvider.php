<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

use Lsa\Xsl\Core\Exceptions\InvalidAttributeValueParseException;

final class RgbIccFunctionDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['rgb-icc(255, 0, 0, RGBColorProfile, 1, 0)', 'rgb-icc(255,0,0,RGBColorProfile,1,0)'],
            ['rgb-icc(255,0,0,CMYKColorProfile,0,1)', 'rgb-icc(255,0,0,CMYKColorProfile,0,1)'],
            ['rgb-icc(255,0,0,UnknownProfile,0,1)', 'rgb(255,0,0)'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [

            ['rgb-icc(255,0,0,CMYKColorProfile,0,1,1)', '', InvalidAttributeValueParseException::class], // wrong number of components
            ['rgb-icc(255,0,CMYKColorProfile,0,1)', '', InvalidAttributeValueParseException::class], // wrong rgb color fallback
            ['rgb-icc(255,0,255,0,1,1,0)', '', InvalidAttributeValueParseException::class], // missing color profile name
            ['rgb-icc(255,0,0,UnknownProfile,0,0)', 'rgb-icc(255,0,0,UnknownProfile,0,0)', null], // unreferenced color profile name (see test)
            ['rgb-icc(255,0,0,UnknownProfile,0,0)', 'rgb(255,255,255)', null],         // false result
        ];
    }
}
