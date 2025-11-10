<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class SpeakNumeralDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['digits'],
            ['continuous'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Digits'],             // case-sensitive
            [' continuous'],        // leading space
            ['digits '],            // trailing space
            ['continuous digits'],  // multiple keywords
            ['inherit digits'],     // multiple keywords
            ['digit'],              // invalid keyword
            [''],                   // empty string
            [null],                 // null value
            [true],                 // boolean
            [false],
            [[]],                   // array
            [new \stdClass()],      // object
        ];
    }
}
