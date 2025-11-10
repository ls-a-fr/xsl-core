<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class HyphenationKeepDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['auto'],
            ['column'],
            ['page'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Auto'],              // case-sensitive
            [' column'],           // leading space
            ['page '],             // trailing space
            ['column page'],       // multiple keywords
            ['pages'],             // invalid keyword
            ['inherit auto'],      // multiple keywords
            [''],                  // empty string
            [null],                // null value
            [true],                // boolean
            [false],
            [[]],                  // array
            [new \stdClass()],     // object
        ];
    }
}
