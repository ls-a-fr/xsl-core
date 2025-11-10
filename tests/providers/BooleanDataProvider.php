<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class BooleanDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['true'],
            ['false'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['True'],               // case-sensitive
            ['False'],              // case-sensitive
            ['true false'],         // multiple values
            ['yes'],                // invalid keyword
            ['no'],                 // invalid keyword
            ['1'],                  // numeric representation
            ['0'],                  // numeric representation
            [''],                   // empty string
            [null],                 // null value
            [true],                 // boolean type
            [false],
            [[]],                   // array
            [new \stdClass()],      // object
        ];
    }
}
