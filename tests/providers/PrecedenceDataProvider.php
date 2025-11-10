<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class PrecedenceDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['true'],
            ['false'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['True'],             // case-sensitive
            ['false true'],       // multiple values
            ['truth'],            // invalid keyword
            [' true'],            // leading space
            ['false '],           // trailing space
            [''],                 // empty string
            [null],               // null value
            [1],                  // numeric value
            [0],
            [true],               // boolean literal
            [false],
            [[]],                 // array
            [new \stdClass()],    // object
        ];
    }
}
