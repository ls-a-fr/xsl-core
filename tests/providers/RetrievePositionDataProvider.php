<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class RetrievePositionDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['first-starting-within-page'],
            ['first-including-carryover'],
            ['last-starting-within-page'],
            ['last-ending-within-page'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['First-starting-within-page'],          // case-sensitive
            ['first_starting_within_page'],          // underscores not allowed
            ['first-starting-within-page last-ending-within-page'], // multiple values
            ['first-including-carryover '],          // trailing space
            [' last-starting-within-page'],          // leading space
            ['firststartingwithinpage'],             // missing hyphens
            [''],                                     // empty string
            [null],                                   // null value
            [true],                                   // boolean
            [false],
            [[]],                                     // array
            [new \stdClass()],                        // object
        ];
    }
}
