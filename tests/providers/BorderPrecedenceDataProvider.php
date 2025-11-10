<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class BorderPrecedenceDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['force'],
            ['0'],
            ['1'],
            ['-5'],
            ['+10'],
            ['999'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Force'],             // case-sensitive
            ['+'],                 // plus without digits
            ['-'],                 // minus without digits
            ['1.0'],               // decimal not allowed in <integer>
            ['0x10'],              // hexadecimal not valid
            ['force 5'],           // multiple values
            ['+1.'],               // invalid: ends in dot
            [''],                  // empty string
            [null],                // null value
            [true],                // boolean
            [false],
            [[]],                  // array
            [new \stdClass()],     // object
        ];
    }
}
