<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class WhiteSpaceDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['normal'],
            ['pre'],
            ['nowrap'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            [''],                 // empty string
            ['pre nowrap'],       // multiple values
            ['no-wrap'],          // invalid token
            ['PRE'],              // case-sensitive
            ['none'],             // not allowed
            [null],               // null value
            [true],               // boolean
            [false],
            [[]],                 // array
            [new \stdClass()],    // object
        ];
    }
}
