<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class BreaksDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['auto'],
            ['column'],
            ['page'],
            ['even-page'],
            ['odd-page'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Auto'],                 // case-sensitive
            ['column page'],          // multiple values
            ['evenpage'],             // malformed keyword
            [' odd-page'],            // leading space
            ['page '],                // trailing space
            ['inherit column'],       // multiple keywords
            [''],                     // empty string
            [null],                   // null value
            [true],                   // boolean
            [false],
            [[]],                     // array
            [new \stdClass()],        // object
        ];
    }
}
