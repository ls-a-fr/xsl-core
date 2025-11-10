<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class BackgroundRepeatDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['repeat'],
            ['repeat-x'],
            ['repeat-y'],
            ['no-repeat'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Repeat'],             // case-sensitive
            [' repeat'],            // leading space
            ['repeat '],            // trailing space
            ['repeat-x repeat-y'],  // multiple keywords
            ['repeat inherit'],     // multiple keywords
            ['norepeat'],           // invalid keyword
            [''],                   // empty string
            [null],                 // null value
            [true],                 // boolean
            [false],
            [[]],                   // array
            [new \stdClass()],      // object
        ];
    }
}
