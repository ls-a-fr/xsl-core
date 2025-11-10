<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class PositionDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['static'],
            ['relative'],
            ['absolute'],
            ['fixed'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['STATIC'],               // case-sensitive
            ['relative absolute'],    // multiple values
            ['relativ'],              // typo
            ['fixd'],                 // typo
            ['none'],                 // not a valid value
            [''],                     // empty string
            [null],                   // null value
            [true],                   // boolean
            [false],
            [[]],                     // array
            [new \stdClass()],        // object
        ];
    }
}
