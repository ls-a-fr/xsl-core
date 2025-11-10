<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class LanguageDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['none'],
            ['en'],        // ISO 639-1
            ['fr'],        // ISO 639-1
            ['de'],        // ISO 639-1
            ['ja'],        // ISO 639-1
            ['es'],        // ISO 639-1
            ['eng'],       // ISO 639-2
            ['fra'],       // ISO 639-2
            ['deu'],       // ISO 639-2
            ['jpn'],       // ISO 639-2
            ['spa'],       // ISO 639-2
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['EN'],               // uppercase not allowed
            ['Eng'],              // mixed case
            ['arz'],              // unknown code
            ['english'],          // full language name
            ['e'],                // too short
            ['engl'],             // too long
            ['en-US'],            // language tag not allowed
            ['en fr'],            // multiple values
            ['inherit en'],       // mixed keyword and language
            ['none fra'],         // multiple values
            [''],                 // empty string
            [null],               // null value
            [true],               // boolean
            [false],
            [[]],                 // array
            [new \stdClass()],    // object
        ];
    }
}
