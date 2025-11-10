<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class InternalDestinationDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            [''],
            ['id123'],
            ['ref_456'],
            ['someId'],
            ['_underscoreStart'],
            ['name.with.dots'],
            ['name-with-hyphen'],
            ['UnicodeÉ'],
            ['ref₁₂₃'],
            ['dot..dot'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['colon:inside'],         // must comply with NCName
            ['123start'],             // starts with digit
            ['has space'],            // contains space
            [null],                   // null value
            [true],                   // boolean
            [false],
            [[]],                     // array
            [new \stdClass()],        // object
        ];
    }
}
