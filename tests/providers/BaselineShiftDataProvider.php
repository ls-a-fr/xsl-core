<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class BaselineShiftDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['baseline'],
            ['sub'],
            ['super'],
            ['0%'],
            ['100%'],
            ['-25%'],
            ['+50%'],
            ['0px'],
            ['1.5em'],
            ['-2pt'],
            ['+3mm'],
            ['.75in'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['BaseLine'],                // case-sensitive
            ['sub super'],              // multiple keywords
            ['1'],                      // missing unit
            ['1.'],                     // trailing dot without decimals
            ['1,5em'],                  // comma instead of dot
            ['%'],                      // missing number
            ['baseline 1em'],           // multiple values
            ['inherit baseline'],       // multiple keywords
            [''],                       // empty string
            [null],                     // null value
            [true],                     // boolean
            [false],
            [[]],                       // array
            [new \stdClass()],          // object
        ];
    }
}
