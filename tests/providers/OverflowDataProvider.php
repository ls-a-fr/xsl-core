<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class OverflowDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['visible'],
            ['hidden'],
            ['scroll'],
            ['error-if-overflow'],
            ['repeat'],
            ['auto'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Visible'],                  // case-sensitive
            ['hidden scroll'],            // multiple values
            ['error_if_overflow'],        // invalid character
            ['repeat auto'],              // multiple values
            [' scroll'],                  // leading space
            ['auto '],                    // trailing space
            [''],                         // empty string
            [null],                       // null value
            [true],                       // boolean
            [false],
            [[]],                         // array
            [new \stdClass()],            // object
        ];
    }
}
