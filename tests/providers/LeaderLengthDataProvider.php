<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class LeaderLengthDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['0%'],
            ['100%'],
            ['-25%'],
            ['+33.33%'],
            ['.5%'],
            ['0px 0px 0px'],
            ['1em 2em 3em'],
            ['-1pt -1pt -1pt'],
            ['+2mm +2mm +2mm'],
            ['0.5cm 1cm 1.5cm'],
            ['.5em .75em 1em'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['1'],                          // missing unit
            ['10'],                         // missing unit
            ['10 px'],                      // space between number and unit
            ['10.'],                        // invalid float
            ['%'],                          // missing number
            ['+%'],                         // missing number
            ['1.2.3em'],                    // malformed float
            ['1em 2em'],                    // incomplete <length-range>
            ['1em 2em 3em 4em'],            // too many values
            ['0px, 0px, 0px'],              // comma-separated instead of space
            ['0px 0px'],                    // missing max
            ['inherit 100%'],              // multiple values
            [''],                           // empty string
            [null],                         // null value
            [true],                         // boolean
            [false],
            [[]],                           // array
            [new \stdClass()],              // object
        ];
    }
}
