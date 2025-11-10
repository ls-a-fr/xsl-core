<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class ColumnGapDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['0px'],
            ['1em'],
            ['-2pt'],
            ['+3mm'],
            ['.75in'],
            ['0%'],
            ['100%'],
            ['-50%'],
            ['+25%'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['1'],                  // missing unit
            ['px1'],                // malformed length
            ['1.'],                 // trailing dot without decimals
            ['1,5em'],              // comma instead of dot
            ['%'],                  // missing number
            ['1em 50%'],            // multiple values
            ['inherit 0%'],         // mixed keyword and value
            [''],                   // empty string
            [null],                 // null value
            [true],                 // boolean
            [false],
            [[]],                   // array
            [new \stdClass()],      // object
        ];
    }
}
