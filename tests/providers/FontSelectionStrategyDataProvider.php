<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class FontSelectionStrategyDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['auto'],
            ['character-by-character'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Auto'],                        // case-sensitive
            ['character by character'],      // missing hyphens
            ['character-bycharacter'],       // malformed keyword
            ['auto character-by-character'], // multiple keywords
            ['inherit auto'],                // multiple keywords
            [''],                            // empty string
            [null],                          // null value
            [true],                          // boolean
            [false],
            [[]],                            // array
            [new \stdClass()],               // object
        ];
    }
}
