<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class FontVariantDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['normal'],
            ['small-caps'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Normal'],              // case-sensitive
            [' small-caps'],         // leading space
            ['small-caps '],         // trailing space
            ['smallcaps'],           // missing hyphen
            ['normal small-caps'],   // multiple keywords
            ['inherit normal'],      // multiple keywords
            ['caps'],                // invalid keyword
            [''],                    // empty string
            [null],                  // null value
            [true],                  // boolean
            [false],
            [[]],                    // array
            [new \stdClass()],       // object
        ];
    }
}
