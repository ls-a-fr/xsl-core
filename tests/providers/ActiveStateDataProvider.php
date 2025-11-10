<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class ActiveStateDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['link'],
            ['visited'],
            ['active'],
            ['hover'],
            ['focus'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Link'],              // case-sensitive
            ['active hover'],      // multiple values
            ['clicked'],           // invalid keyword
            ['hover '],            // trailing space
            [' focus'],            // leading space
            ['visited-link'],      // invalid combination
            [''],                  // empty string
            [null],                // null value
            [true],                // boolean
            [false],
            [[]],                  // array
            [new \stdClass()],     // object
        ];
    }
}
