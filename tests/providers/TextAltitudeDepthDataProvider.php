<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class TextAltitudeDepthDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['use-font-metrics'],
            ['0px'],
            ['10pt'],
            ['-2.5cm'],
            ['+3mm'],
            ['2in'],
            ['.25em'],
            ['+0.1px'],
            ['50%'],
            ['0%'],
            ['-10%'],
            ['+75.5%'],
            ['.5%'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Use-font-metrics'],       // case-sensitive
            ['use_font_metrics'],       // underscores not allowed
            ['10'],                     // missing unit
            ['px10'],                   // malformed
            ['10 px'],                  // space between number and unit
            ['ten%'],                   // non-numeric
            ['50 percent'],             // invalid unit
            ['10.%'],                   // malformed float
            ['.'],                      // dot only
            ['1.2.3cm'],                // multiple decimals
            ['--5px'],                  // invalid negative
            ['5%px'],                   // mixed unit
            ['use-font-metrics 50%'],   // multiple values
            [''],                       // empty string
            [null],                     // null value
            [true],                     // boolean
            [false],
            [[]],                       // array
            [new \stdClass()],          // object
        ];
    }
}
