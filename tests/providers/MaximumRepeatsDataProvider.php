<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class MaximumRepeatsDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['0'],
            ['123'],
            ['-45'],
            ['+78'],
            ['3.14'],
            ['.5'],
            ['-0.25'],
            ['+.001'],
            ['no-limit'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['No-limit'],              // case-sensitive
            ['nolimit'],               // missing hyphen
            ['no_limit'],              // underscore not allowed
            ['1.'],                    // ends in dot without decimal part
            ['.'],                     // dot only
            ['--5'],                   // double minus
            ['++2'],                   // double plus
            ['2.5.6'],                 // multiple decimal points
            ['no-limit inherit'],      // multiple values
            [' no-limit'],             // leading space
            ['inherit '],              // trailing space
            [''],                      // empty string
            [null],                    // null value
            [true],                    // boolean
            [false],
            [[]],                      // array
            [new \stdClass()],         // object
        ];
    }
}
