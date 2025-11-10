<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class CharacterDataProvider
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
            ['𐍈'],               // supplementary Unicode character
            ['&#x2202;'],        // character reference
            [' '],               // whitespace
            ["\n"],              // newline character (should be &#xA;)
            ["\t"],              // tab character (should be &#x9;)
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            [''],                // empty string
            ['ab'],              // more than one character
            ["\0"],              // null byte
            ["\u0001"],          // control character
            [null],              // null value
            [true],              // boolean
            [false],
            [[]],                // array
            [new \stdClass()],   // object
        ];
    }
}
