<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class InitialPageNumberDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['auto'],
            ['auto-odd'],
            ['auto-even'],
            ['0'],
            ['123'],
            ['-45'],
            ['+78'],
            ['3.14'],
            ['.5'],
            ['-0.25'],
            ['+.001'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Auto'],                 // case-sensitive
            ['autoodd'],              // missing hyphen
            ['auto_even'],            // underscore not allowed
            ['1.'],                   // ends in dot without decimal part
            ['.'],                    // dot only
            ['++3'],                  // double plus
            ['--2'],                  // double minus
            ['3.1.4'],                // multiple dots
            ['auto auto-odd'],        // multiple values
            ['auto-odd '],            // trailing space
            [' inherit'],             // leading space
            [''],                     // empty string
            [null],                   // null value
            [true],                   // boolean
            [false],
            [[]],                     // array
            [new \stdClass()],        // object
        ];
    }
}
