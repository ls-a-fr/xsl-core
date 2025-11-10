<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class TreatAsWordSpaceDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['auto'],
            ['true'],
            ['false'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Auto'],                // case-sensitive
            [' true'],               // leading space
            ['false '],              // trailing space
            ['true false'],          // multiple keywords
            ['inherit auto'],        // multiple keywords
            ['yes'],                 // invalid keyword
            ['no'],                  // invalid keyword
            ['1'],                   // numeric not allowed
            ['0'],                   // numeric not allowed
            [''],                    // empty string
            [null],                  // null value
            [true],                  // native boolean
            [false],
            [[]],                    // array
            [new \stdClass()],       // object
        ];
    }
}
