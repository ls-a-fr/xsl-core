<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class ScaleOptionDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['width'],
            ['height'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Width'],             // case-sensitive
            ['height width'],      // multiple values
            ['w1dth'],             // invalid identifier
            [' height'],           // leading space
            ['inherit '],          // trailing space
            [''],                  // empty string
            [null],                // null value
            [true],                // boolean
            [false],
            [[]],                  // array
            [new \stdClass()],     // object
        ];
    }
}
