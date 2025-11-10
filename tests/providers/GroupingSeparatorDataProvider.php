<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class GroupingSeparatorDataProvider
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
            [''],                // empty string
            [' '],               // whitespace
            ["\n"],              // newline character
            ["\t"],              // tab character
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
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
