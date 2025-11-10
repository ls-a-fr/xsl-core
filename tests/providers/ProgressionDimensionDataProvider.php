<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class ProgressionDimensionDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['auto'],
            ['0px'],
            ['10em'],
            ['-2pt'],
            ['+3mm'],
            ['.75in'],
            ['0%'],
            ['100%'],
            ['-25%'],
            ['+50%'],
            ['1em 2em 3em'],           // <length-range>: min, opt, max
            ['0pt 0pt 0pt'],
            ['-1em 0em 1em'],
            ['+2mm +2mm +2mm'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['1'],                          // missing unit
            ['1.'],                         // trailing dot
            ['1,5em'],                      // comma instead of dot
            ['%'],                          // missing number
            ['1em 2em'],                    // incomplete length-range
            ['1em 2em 3em 4em'],            // too many values
            ['1em, 2em, 3em'],              // invalid separators
            ['inherit auto'],              // mixed keyword and value
            ['auto 1em'],                  // multiple values
            [''],                          // empty string
            [null],                        // null value
            [true],                        // boolean
            [false],
            [[]],                          // array
            [new \stdClass()],             // object
        ];
    }
}
