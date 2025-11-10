<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class WrapOptionDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['no-wrap'],
            ['wrap'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['No-Wrap'],             // case-sensitive
            [' wrap'],               // leading space
            ['no-wrap '],            // trailing space
            ['wrap no-wrap'],        // multiple keywords
            ['nowrap'],              // malformed keyword
            ['inherit wrap'],        // multiple keywords
            [''],                    // empty string
            [null],                  // null value
            [true],                  // boolean
            [false],
            [[]],                    // array
            [new \stdClass()],       // object
        ];
    }
}
