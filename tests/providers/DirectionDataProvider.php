<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class DirectionDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['ltr'],
            ['rtl'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['LTR'],              // case-sensitive
            ['rtl ltr'],          // multiple values
            ['rt_l'],             // invalid character
            [' rtl'],             // leading space
            ['ltr '],             // trailing space
            [''],                 // empty string
            [null],               // null value
            [true],               // boolean
            [false],
            [[]],                 // array
            [new \stdClass()],    // object
        ];
    }
}
