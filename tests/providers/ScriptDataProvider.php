<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class ScriptDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['none'],
            ['auto'],
            ['Latn'],     // Latin script
            ['Cyrl'],     // Cyrillic script
            ['Grek'],     // Greek script
            ['Arab'],     // Arabic script
            ['Hans'],     // Han Simplified
            ['Hant'],     // Han Traditional
            ['Deva'],     // Devanagari
            ['Jpan'],     // Japanese
            ['Kore'],     // Korean
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['latn'],             // lowercase not allowed
            ['LATN'],             // uppercase not allowed
            ['Lat'],              // too short
            ['Latin'],            // too long
            ['Latn-CN'],          // region not allowed
            ['Latn Cyrl'],        // multiple scripts
            ['auto Latn'],        // multiple values
            ['inherit Hant'],     // multiple values
            [''],                 // empty string
            [null],               // null value
            [true],               // boolean
            [false],
            [[]],                 // array
            [new \stdClass()],    // object
        ];
    }
}
