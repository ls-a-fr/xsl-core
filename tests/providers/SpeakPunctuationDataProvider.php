<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class SpeakPunctuationDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['code'],
            ['none'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Code'],            // case-sensitive
            [' none'],           // leading space
            ['code '],           // trailing space
            ['code none'],       // multiple keywords
            ['inherit code'],    // multiple keywords
            ['coded'],           // invalid keyword
            [''],                // empty string
            [null],              // null value
            [true],              // boolean
            [false],
            [[]],                // array
            [new \stdClass()],   // object
        ];
    }
}
