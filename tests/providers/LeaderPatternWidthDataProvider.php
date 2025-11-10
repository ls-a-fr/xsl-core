<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class LeaderPatternWidthDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['use-font-metrics'],
            ['0px'],
            ['10pt'],
            ['-5mm'],
            ['+2cm'],
            ['0.5in'],
            ['1.25em'],
            ['.5em'],
            ['0%'],
            ['100%'],
            ['-25%'],
            ['+33.33%'],
            ['.5%'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['use_font_metrics'],      // invalid characters
            ['1'],                     // missing unit
            ['10'],                    // missing unit
            ['10 px'],                 // space between number and unit
            ['10.'],                   // invalid float
            ['.'],                     // invalid float
            ['%'],                     // missing number
            ['+%'],                    // missing number
            ['1.2.3em'],               // malformed float
            ['use-font-metrics 1px'], // multiple values
            ['inherit 100%'],         // multiple values
            [''],                     // empty string
            [null],                   // null value
            [true],                   // boolean
            [false],
            [[]],                     // array
            [new \stdClass()],        // object
        ];
    }
}
