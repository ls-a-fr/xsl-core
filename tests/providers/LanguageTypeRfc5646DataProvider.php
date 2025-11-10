<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class LanguageTypeRfc5646DataProvider
{
    public static function validDataProvider(): array
    {
        return [
            // Simple language subtag:
            ['de'],
            ['fr'],
            ['ja'],
            ['i-enochian'],
            // Language subtag plus Script subtag:
            ['zh-Hant'],
            ['zh-Hans'],
            ['sr-Cyrl'],
            ['sr-Latn'],
            // Extended language subtags and their primary language subtag counterparts:
            ['zh-cmn-Hans-CN'],
            ['cmn-Hans-CN'],
            ['zh-yue-HK'],
            ['yue-HK'],
            // Language-Script-Region:
            ['zh-Hans-CN'],
            ['sr-Latn-RS'],
            // Language-Variant:
            ['sl-rozaj'],
            ['sl-rozaj-biske'],
            ['sl-nedis'],
            // Language-Region-Variant:
            ['de-CH-1901'],
            ['sl-IT-nedis'],
            // Language-Script-Region-Variant:
            ['hy-Latn-IT-arevela'],
            // Language-Region:
            ['de-DE'],
            ['en-US'],
            ['es-419'],
            ['de-CH-x-phonebk'],
            ['az-Arab-x-AZE-derbend'],
            // Private use registry values:
            ['x-whatever'],
            ['qaa-Qaaa-QM-x-southern'],
            ['de-Qaaa'],
            ['sr-Latn-QM'],
            ['sr-Qaaa-RS'],
            // Tags that use extensions:
            ['en-US-u-islamcal'],
            ['zh-CN-a-myext-x-private'],
            ['en-a-myext-b-another'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['EN'],               // uppercase not allowed
            ['Eng'],              // mixed case
            ['xxx'],              // unknown code
            ['english'],          // full language name
            ['e'],                // too short
            ['engl'],             // too long
            ['en fr'],            // multiple values
            ['de-419-DE'],        // two region tags
            ['a-DE'],             // use of a single-character subtag in primary position; note
            // that there are a few grandfathered tags that start with "i-" that
            // are valid
            ['ar-a-aaa-b-bbb-a-ccc'], // (two extensions with same single-letter prefix)
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
