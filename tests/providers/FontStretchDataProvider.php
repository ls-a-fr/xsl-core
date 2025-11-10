<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class FontStretchDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['normal'],
            ['wider'],
            ['narrower'],
            ['ultra-condensed'],
            ['extra-condensed'],
            ['condensed'],
            ['semi-condensed'],
            ['semi-expanded'],
            ['expanded'],
            ['extra-expanded'],
            ['ultra-expanded'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Normal'],                    // case-sensitive
            [' ultra-condensed'],          // leading space
            ['expanded '],                 // trailing space
            ['ultra condensed'],           // missing hyphen
            ['wide'],                      // invalid keyword
            ['normal expanded'],           // multiple keywords
            ['inherit narrower'],          // multiple keywords
            [''],                          // empty string
            [null],                        // null value
            [true],                        // boolean
            [false],
            [[]],                          // array
            [new \stdClass()],             // object
        ];
    }
}
