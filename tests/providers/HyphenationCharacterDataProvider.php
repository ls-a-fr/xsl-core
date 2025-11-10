<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class HyphenationCharacterDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['a'],
            ['Z'],
            ['9'],
            ['#'],
            ['Ω'],
            ['中'],
            ['𐍈'],                   // supplementary Unicode character
            ['&#x2202;'],            // character reference
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['ab'],                  // more than one character
            [''],                    // empty string
            [' '],                   // space character
            ['\n'],                  // newline character
            ['\t'],                  // tab character
            ['\0'],                  // null byte
            ['\u0001'],              // restricted control character
            ['inherit a'],           // multiple values
            [null],                  // null value
            [true],                  // boolean
            [false],
            [[]],                    // array
            [new \stdClass()],       // object
        ];
    }
}
