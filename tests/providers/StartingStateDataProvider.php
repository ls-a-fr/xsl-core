<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class StartingStateDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['show'],
            ['hide'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Show'],          // case-sensitive
            ['hide show'],     // multiple values
            ['display'],       // invalid keyword
            [' show'],         // leading space
            ['hide '],         // trailing space
            [''],              // empty string
            [null],            // null value
            [true],            // boolean
            [false],
            [[]],              // array
            [new \stdClass()], // object
        ];
    }
}
