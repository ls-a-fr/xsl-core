<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class PauseBeforeDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['0s'],
            ['1s'],
            ['1.5s'],
            ['+2s'],
            ['-0.25s'],
            ['100ms'],
            ['250.5ms'],
            ['+0ms'],
            ['-300ms'],
            ['0%'],
            ['50%'],
            ['+75%'],
            ['-10%'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['1'],               // missing unit
            ['s1'],              // malformed time
            ['1.5seconds'],      // invalid unit
            ['1.s'],             // missing decimal
            ['%'],               // missing number in percentage
            ['50 percent'],      // invalid format
            ['1s 50%'],          // multiple values
            ['inherit 0s'],      // mixed keyword and value
            [''],                // empty string
            [null],              // null value
            [true],              // boolean
            [false],
            [[]],                // array
            [new \stdClass()],   // object
        ];
    }
}
