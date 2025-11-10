<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class NameDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['simpleName'],
            ['name123'],
            ['_underscore'],
            ['name-with-hyphen'],
            ['name.with.dot'],
            ['UnicodeÉ'],
            ['nāméWithÜnicode'],
            ['name₁₂₃'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['123name'],             // starts with digit
            ['name name'],           // space not allowed
            ['name@domain'],         // invalid character
            ['name:name'],           // colon not allowed
            [''],                    // empty string
            [null],                  // null value
            [true],                  // boolean
            [false],
            [[]],                    // array
            [new \stdClass()],       // object
        ];
    }
}
