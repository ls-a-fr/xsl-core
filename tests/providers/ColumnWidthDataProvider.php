<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class ColumnWidthDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['0px'],
            ['10pt'],
            ['-5.5cm'],
            ['+3mm'],
            ['2in'],
            ['.25em'],
            ['+0.1px'],
            ['50%'],
            ['0%'],
            ['-10%'],
            ['+75.5%'],
            ['.5%'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['10'],                // no unit
            ['px10'],              // malformed
            ['10 px'],             // space between number and unit
            ['ten%'],              // non-numeric
            ['50 percent'],        // invalid unit
            ['10.%'],              // malformed float
            ['.'],                 // dot only
            ['1.2.3cm'],           // invalid float
            ['--5px'],             // invalid negative
            ['5%px'],              // mixed unit
            [''],                  // empty string
            [null],                // null value
            [true],                // boolean
            [false],
            [[]],                  // array
            [new \stdClass()],     // object
        ];
    }
}
