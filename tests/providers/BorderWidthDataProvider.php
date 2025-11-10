<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class BorderWidthDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['thin'],
            ['medium'],
            ['thick'],
            ['0px'],
            ['1px'],
            ['2.5pt'],
            ['+0.25cm'],
            ['.5in'],
            ['10em'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Thin'],              // case-sensitive
            ['thin medium'],       // multiple values
            ['1'],                 // missing unit
            ['px1'],               // malformed unit
            ['10 px'],             // space between number and unit
            ['tenpt'],             // non-numeric
            ['10percent'],         // invalid unit
            ['1.'],                // ends in dot
            ['1.2.3mm'],           // malformed float
            ['-1mm'],              // explicit borders cannot be negative
            ['--2px'],             // invalid negative
            ['1pxthin'],           // concatenated values
            [''],                  // empty string
            [null],                // null value
            [true],                // boolean
            [false],
            [[]],                  // array
            [new \stdClass()],     // object
        ];
    }
}
