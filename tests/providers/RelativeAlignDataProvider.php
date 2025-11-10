<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class RelativeAlignDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['before'],
            ['baseline'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Before'],              // case-sensitive
            [' baseline'],           // leading space
            ['before '],             // trailing space
            ['before baseline'],     // multiple keywords
            ['base-line'],           // malformed keyword
            ['inherit before'],      // multiple keywords
            [''],                    // empty string
            [null],                  // null value
            [true],                  // boolean
            [false],
            [[]],                    // array
            [new \stdClass()],       // object
        ];
    }
}
