<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class RuleStyleDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['none'],
            ['dotted'],
            ['dashed'],
            ['solid'],
            ['double'],
            ['groove'],
            ['ridge'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['None'],                 // case-sensitive
            ['dotted solid'],         // multiple values
            ['dash'],                 // invalid keyword
            ['solid '],               // trailing space
            [' groove'],              // leading space
            ['inherit none'],         // multiple keywords
            [''],                     // empty string
            [null],                   // null value
            [true],                   // boolean
            [false],
            [[]],                     // array
            [new \stdClass()],        // object
        ];
    }
}
