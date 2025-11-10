<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class StringDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['simple'],
            ['string123'],
            ['_underscore'],
            ['hyphen-name'],
            ['dot.name'],
            ['UnicodeÉ'],
            ['nāméWithÜnicode'],
            ['name₁₂₃'],
            ['a'],
            ['x1-y2.z3'],
            ['string with space'],
            ['string:name'],
            ['name@'],
            [''],
            ['"quoted"'],
            ["'quoted'"],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            [null],                  // null value
            [true],                  // boolean
            [false],
            [[]],                    // array
            [new \stdClass()],       // object
        ];
    }
}
