<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class DisplayAlignDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['auto'],
            ['before'],
            ['center'],
            ['after'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Auto'],               // case-sensitive
            [' before'],            // leading space
            ['center '],            // trailing space
            ['after center'],       // multiple keywords
            ['centre'],             // misspelled keyword
            ['inherit auto'],       // multiple keywords
            [''],                   // empty string
            [null],                 // null value
            [true],                 // boolean
            [false],
            [[]],                   // array
            [new \stdClass()],      // object
        ];
    }
}
