<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class BorderStyleDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['none'],
            ['hidden'],
            ['dotted'],
            ['dashed'],
            ['solid'],
            ['double'],
            ['groove'],
            ['ridge'],
            ['inset'],
            ['outset'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['None'],               // case-sensitive
            [' solid'],             // leading space
            ['dashed '],            // trailing space
            ['none solid'],         // multiple values
            ['hidden, dotted'],     // comma-separated values not allowed
            ['dot'],                // invalid keyword
            ['inset outset'],       // multiple values
            ['inherit dashed'],     // mixed keyword and value
            [''],                   // empty string
            [null],                 // null value
            [true],                 // boolean
            [false],
            [[]],                   // array
            [new \stdClass()],      // object
        ];
    }
}
