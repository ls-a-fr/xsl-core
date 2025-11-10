<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class LeaderPatternDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['space'],
            ['rule'],
            ['dots'],
            ['use-content'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Space'],                // case-sensitive
            ['rule dots'],            // multiple values
            ['usecontent'],           // missing hyphen
            ['dots '],                // trailing space
            [' use-content'],         // leading space
            ['inherit dots'],         // multiple values
            [''],                     // empty string
            [null],                   // null value
            [true],                   // boolean
            [false],
            [[]],                     // array
            [new \stdClass()],        // object
        ];
    }
}
