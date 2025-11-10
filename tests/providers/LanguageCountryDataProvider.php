<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class LanguageCountryDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['en'],
            ['fr'],
            ['de'],
            ['en-US'],
            ['fr-FR'],
            ['zh-CN'],
            ['pt-BR'],
            ['en-GB'],
            ['ja-JP'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            [''],                   // empty string
            ['EN'],                 // not lowercase
            ['english'],            // not ISO code
            ['en_us'],              // underscore instead of hyphen
            ['fr-FR-Paris'],        // too many segments
            ['en-US-'],             // trailing hyphen
            ['-US'],                // missing language
            ['en-'],                // missing region
            ['en--US'],             // double hyphen
            ['123'],                // numeric only
            ['es-419'],             // XSL does not seem to support BCP 47
            ['en-123'],             // numeric region invalid
            ['fr-F'],               // incomplete region
            [null],                 // null value
            [true],                 // boolean
            [false],
            [[]],                   // array
            [new \stdClass()],      // object
        ];
    }
}
