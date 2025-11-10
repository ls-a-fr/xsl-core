<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class CaptionSideDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['before'],
            ['after'],
            ['start'],
            ['end'],
            ['top'],
            ['bottom'],
            ['left'],
            ['right'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Before'],             // case-sensitive
            ['start end'],          // multiple values
            ['top-bottom'],         // invalid compound
            [' left'],              // leading space
            ['right '],             // trailing space
            [''],                   // empty string
            [null],                 // null value
            [true],                 // boolean
            [false],
            [[]],                   // array
            [new \stdClass()],      // object
        ];
    }
}
