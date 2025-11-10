<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class FontWeightDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['normal'],
            ['bold'],
            ['bolder'],
            ['lighter'],
            ['100'],
            ['200'],
            ['300'],
            ['400'],
            ['500'],
            ['600'],
            ['700'],
            ['800'],
            ['900'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Normal'],              // case-sensitive
            [' bold'],               // leading space
            ['bolder '],             // trailing space
            ['bold normal'],         // multiple keywords
            ['100 400'],             // multiple values
            ['950'],                 // invalid numeric weight
            ['50'],                  // invalid numeric weight
            ['ten'],                 // non-numeric string
            ['inherit bold'],        // multiple keywords
            [''],                    // empty string
            [null],                  // null value
            [true],                  // boolean
            [false],
            [[]],                    // array
            [new \stdClass()],       // object
        ];
    }
}
