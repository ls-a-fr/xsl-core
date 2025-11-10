<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class AbsolutePositionDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['auto'],
            ['absolute'],
            ['fixed'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Auto'],         // case-sensitive
            ['absolute '],    // trailing space
            [' fixed'],       // leading space
            ['fixed\n'],      // newline character
            ['inherit\t'],    // tab character
            ['none'],         // not in allowed set
            ['relative'],     // not in allowed set
            ['static'],       // not in allowed set
            ['auto1'],        // appended characters
            ['1auto'],        // prepended characters
            ['inheritt'],     // misspelling
            [''],             // empty string
            [null],           // null value
            [true],           // boolean
            [false],
            [[]],             // array
            [new \stdClass()], // object
        ];
    }
}
