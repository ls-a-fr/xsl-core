<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

use Lsa\Xsl\Core\Exceptions\InvalidAttributeValueParseException;

final class RgbFunctionDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['rgb(0,0,0)', 'rgb(0,0,0)'],
            ['rgb(255, 255, 255)', 'rgb(255,255,255)'],
            ['rgb(1, 0.5, 0)', 'rgb(1,0.5,0)'],
            ['rgb(0, .3, .6)', 'rgb(0,.3,.6)'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['rgb(.3,.6,127)', '', InvalidAttributeValueParseException::class],         // mixed real and byte
            ['rgb(1.,.6,.3)', '', InvalidAttributeValueParseException::class],          // invalid decimal component
            ['rgb(256,0,0)', '', InvalidAttributeValueParseException::class],           // out-of-range value
            ['rgba(0,0,0,1.5)', '', InvalidAttributeValueParseException::class],        // wrong number of components
            ['rgb(0,0)', '', InvalidAttributeValueParseException::class],               // missing component
            ['rgb(0 0 0)', '', InvalidAttributeValueParseException::class],             // wrong syntax (missing commas)
            ['rgb(255, 255, 255)', 'rgb(0,0,0)', null],         // false result
        ];
    }
}
