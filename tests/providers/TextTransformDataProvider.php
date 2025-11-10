<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class TextTransformDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['capitalize'],
            ['uppercase'],
            ['lowercase'],
            ['none'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Capitalized'],            // invalid keyword
            [' upperCase'],             // leading space
            ['lowercase '],             // trailing space
            ['uppercase lowercase'],    // multiple keywords
            ['none capitalize'],        // multiple values
            [''],                       // empty string
            [null],                     // null value
            [true],                     // boolean
            [false],
            [[]],                       // array
            [new \stdClass()],          // object
        ];
    }
}
