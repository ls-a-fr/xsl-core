<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class BorderMultiStyleDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['inherit'],
            ['none'],
            ['solid'],
            ['dashed'],
            ['dotted'],
            ['double'],
            ['groove'],
            ['ridge'],
            ['inset'],
            ['outset'],
            ['solid dashed'],
            ['dotted double groove'],
            ['solid dotted dashed double'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            [''],                                    // empty string
            ['solid dashed dotted double groove'],   // more than four values
            ['solid solid solid solid solid'],       // five values
            ['unknown'],                             // invalid style
            ['solid dashed unknown'],                // mixed valid/invalid
            ['solid dashed dotted double extra'],    // too many
            ['inherit solid'],                       // mixed with inherit
            [null],                                  // null value
            [true],                                  // boolean
            [false],
            [[]],                                    // array
            [new \stdClass()],                       // object
        ];
    }
}
