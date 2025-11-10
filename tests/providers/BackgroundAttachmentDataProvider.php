<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class BackgroundAttachmentDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['scroll'],
            ['fixed'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Scroll'],            // case-sensitive
            [' fixed'],            // leading space
            ['scroll '],           // trailing space
            ['scroll fixed'],      // multiple keywords
            ['inherit scroll'],    // multiple keywords
            ['static'],            // invalid keyword
            [''],                  // empty string
            [null],                // null value
            [true],                // boolean
            [false],
            [[]],                  // array
            [new \stdClass()],     // object
        ];
    }
}
