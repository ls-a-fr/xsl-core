<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class SuppressAtLineBreakDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['auto'],
            ['suppress'],
            ['retain'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Auto'],                // case-sensitive
            [' suppress'],           // leading space
            ['retain '],             // trailing space
            ['suppress retain'],     // multiple keywords
            ['inherit auto'],        // multiple keywords
            ['keep'],                // invalid keyword
            [''],                    // empty string
            [null],                  // null value
            [true],                  // boolean
            [false],
            [[]],                    // array
            [new \stdClass()],       // object
        ];
    }
}
