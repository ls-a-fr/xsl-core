<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class ZIndexDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['auto'],
            ['0'],
            ['1'],
            ['-10'],
            ['+25'],
            ['999'],
            ['01'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Auto'],                // case-sensitive
            ['auto 1'],              // multiple values
            ['+'],                   // plus sign without digits
            ['-'],                   // minus sign without digits
            ['1.0'],                 // not an integer
            ['10px'],                // invalid unit
            ['ten'],                 // non-numeric
            [''],                    // empty string
            [null],                  // null value
            [true],                  // boolean
            [false],
            [[]],                    // array
            [new \stdClass()],       // object
        ];
    }
}
