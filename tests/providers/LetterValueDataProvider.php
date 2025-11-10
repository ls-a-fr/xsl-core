<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class LetterValueDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['auto'],
            ['alphabetic'],
            ['traditional'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Auto'],                    // case-sensitive
            ['alphabetic traditional'],  // multiple values
            ['traditionnal'],            // typo
            [' auto'],                   // leading space
            ['alphabetic '],             // trailing space
            [''],                        // empty string
            [null],                      // null value
            [true],                      // boolean
            [false],
            [[]],                        // array
            [new \stdClass()],           // object
        ];
    }
}
