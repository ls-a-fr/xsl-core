<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class RetrieveBoundaryWithinTableDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['table'],
            ['table-fragment'],
            ['page'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Table'],                 // case-sensitive
            ['table_fragment'],        // underscore not allowed
            ['table page'],            // multiple values
            ['table-fragment '],       // trailing space
            [' page'],                 // leading space
            ['tablefragment'],         // missing hyphen
            [''],                      // empty string
            [null],                    // null value
            [true],                    // boolean
            [false],
            [[]],                      // array
            [new \stdClass()],         // object
        ];
    }
}
