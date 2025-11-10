<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class ScoreSpacesDataProvider
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
            ['True'],              // case-sensitive
            ['FALSE'],             // case-sensitive
            ['true false'],        // multiple values
            [' truth'],            // invalid value
            ['false '],            // trailing space
            [''],                  // empty string
            [null],                // null value
            [true],                // boolean (not string)
            [false],
            [[]],                  // array
            [new \stdClass()],     // object
        ];
    }
}
