<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class MergeDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['merge'],
            ['leave-separate'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Merge'],                 // case-sensitive
            ['leave_separate'],        // underscore not allowed
            ['merge leave-separate'],  // multiple values
            ['leave-separate '],       // trailing space
            [' merge'],                // leading space
            ['leaveseparate'],         // missing hyphen
            [''],                      // empty string
            [null],                    // null value
            [true],                    // boolean
            [false],
            [[]],                      // array
            [new \stdClass()],         // object
        ];
    }
}
