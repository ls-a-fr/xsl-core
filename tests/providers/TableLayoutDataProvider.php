<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class TableLayoutDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['auto'],
            ['fixed'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Auto'],             // case-sensitive
            ['auto fixed'],       // multiple values
            ['fixed_auto'],       // invalid format
            [' fixed'],           // leading space
            ['inherit '],         // trailing space
            [''],                 // empty string
            [null],               // null value
            [true],               // boolean
            [false],
            [[]],                 // array
            [new \stdClass()],    // object
        ];
    }
}
