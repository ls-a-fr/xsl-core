<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class FontSizeAdjustDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['0'],
            ['1'],
            ['-1'],
            ['+1'],
            ['0.5'],
            ['.75'],
            ['+2.25'],
            ['-3.0'],
            ['none'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['1.'],                // trailing dot without decimals
            ['+'],                 // sign without digits
            ['-'],                 // sign without digits
            ['none inherit'],      // multiple keywords
            ['1 none'],            // mixed value and keyword
            ['1,5'],               // comma instead of dot
            ['number'],            // invalid string
            [''],                  // empty string
            [null],                // null value
            [true],                // boolean
            [false],
            [[]],                  // array
            [new \stdClass()],     // object
        ];
    }
}
