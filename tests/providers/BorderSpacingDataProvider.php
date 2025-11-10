<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class BorderSpacingDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['inherit'],
            ['0px'],
            ['10pt'],
            ['1.5cm'],
            ['-2mm'],
            ['+3in'],
            ['0.25em'],
            ['5px 10px'],
            ['-1pt +2pt'],
            ['.5em .75em'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['10'],                  // missing unit
            ['px'],                  // unit only
            ['10px 20'],             // second value missing unit
            ['10px 20px 30px'],      // too many values
            ['inherit 10px'],        // mixed with inherit
            ['10px inherit'],        // inherit not allowed as second
            ['1.2.3px'],             // invalid float
            ['10.px'],               // malformed
            ['10pxpx'],              // invalid unit
            [''],                    // empty string
            [null],                  // null value
            [true],                  // boolean
            [false],
            [[]],                    // array
            [new \stdClass()],       // object
        ];
    }
}
