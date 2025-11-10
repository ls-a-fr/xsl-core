<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class PageBreakAfterBeforeDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['auto'],
            ['always'],
            ['avoid'],
            ['left'],
            ['right'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Auto'],              // case-sensitive
            ['left right'],        // multiple values
            ['avoid always'],      // multiple values
            ['center'],            // invalid keyword
            [''],                  // empty string
            [null],                // null value
            [true],                // boolean
            [false],
            [[]],                  // array
            [new \stdClass()],     // object
        ];
    }
}
