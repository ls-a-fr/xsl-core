<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class ForcePageCountDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['auto'],
            ['even'],
            ['odd'],
            ['end-on-even'],
            ['end-on-odd'],
            ['no-force'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Auto'],                    // case-sensitive
            ['end_on_even'],             // underscore not allowed
            ['even odd'],                // multiple values
            ['end-on-even '],            // trailing space
            [' no-force'],               // leading space
            ['endoneven'],               // missing hyphens
            [''],                        // empty string
            [null],                      // null value
            [true],                      // boolean
            [false],
            [[]],                        // array
            [new \stdClass()],           // object
        ];
    }
}
