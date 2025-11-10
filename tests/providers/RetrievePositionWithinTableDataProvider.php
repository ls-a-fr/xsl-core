<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class RetrievePositionWithinTableDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['first-starting'],
            ['first-including-carryover'],
            ['last-starting'],
            ['last-ending'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['First-starting'],              // case-sensitive
            ['first_starting'],              // underscores not allowed
            ['first-starting last-ending'],  // multiple values
            ['last-starting '],              // trailing space
            [' last-ending'],                // leading space
            ['firstincludingcarryover'],     // missing hyphens
            [''],                            // empty string
            [null],                          // null value
            [true],                          // boolean
            [false],
            [[]],                            // array
            [new \stdClass()],               // object
        ];
    }
}
