<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class KeepsDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['auto'],
            ['always'],
            ['0'],
            ['1'],
            ['10'],
            ['always auto'],
            ['auto always'],
            ['always 0 auto'],
            ['auto 1 2'],
            ['always 1 2'],
            ['always auto always'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Auto'],                        // case-sensitive
            ['1 2 auto always'],             // too many components
            ['1,2,3'],                       // invalid separators
            ['auto1 2'],                     // malformed keyword
            ['inherit keep'],                // mixed keyword and value
            ['keep'],                        // missing components
            [''],                            // empty string
            [null],                          // null value
            [true],                          // boolean
            [false],
            [[]],                            // array
            [new \stdClass()],               // object
        ];
    }
}
