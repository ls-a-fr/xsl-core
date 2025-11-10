<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class FontFamilyDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['serif'],
            ['sans-serif'],
            ['monospace'],
            ['cursive'],
            ['fantasy'],
            ['system-ui'],
            ['Times'],
            ['Arial'],
            ['"Helvetica Neue"'],
            ['"Comic Sans MS", cursive'],
            ['Times, serif'],
            ['Arial, "Helvetica Neue", sans-serif'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['serif sans-serif'],          // missing comma
            ['"Unclosed'],                 // unclosed quote
            ['"Mismatched\''],             // mismatched quotes
            ['Times, , serif'],            // empty item
            [',serif'],                    // leading comma
            ['serif,'],                    // trailing comma
            ['Arial,,sans-serif'],         // double comma
            ['inherit serif'],             // mixed keyword and value
            ['Times "New Roman"'],         // missing comma
            [''],                          // empty string
            [null],                        // null value
            [true],                        // boolean
            [false],
            [[]],                          // array
            [new \stdClass()],             // object
        ];
    }
}
