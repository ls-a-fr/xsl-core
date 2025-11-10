<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class HyphenateDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['false'],
            ['true'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['False'],             // case-sensitive
            [' TRUE'],             // leading space
            ['true '],             // trailing space
            ['false true'],        // multiple keywords
            ['inherit false'],     // multiple keywords
            ['yes'],               // invalid keyword
            ['no'],                // invalid keyword
            ['1'],                 // not accepted as boolean
            ['0'],                 // not accepted as boolean
            [''],                  // empty string
            [null],                // null value
            [true],                // native boolean
            [false],
            [[]],                  // array
            [new \stdClass()],     // object
        ];
    }
}
