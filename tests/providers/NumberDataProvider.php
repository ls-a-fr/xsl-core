<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class NumberDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['0'],
            ['123'],
            ['-45'],
            ['+78'],
            ['0.0'],
            ['3.14'],
            ['-0.5'],
            ['+0.25'],
            ['.5'],
            ['-.75'],
            ['+.001'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['1.'],               // invalid: ends in dot without decimal part
            ['.'],                // invalid: dot without digits
            ['--5'],              // invalid: double minus
            ['++3'],              // invalid: double plus
            ['+'],                // invalid: plus without digits
            ['-'],                // invalid: minus without digits
            ['1.2.3'],            // multiple decimal points
            ['number'],           // non-numeric
            ['123px'],            // unit present
            [''],                 // empty string
            [null],               // null value
            [true],               // boolean
            [false],
            [[]],                 // array
            [new \stdClass()],    // object
        ];
    }
}
