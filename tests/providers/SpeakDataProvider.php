<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class SpeakDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['normal'],
            ['none'],
            ['spell-out'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Normal'],            // case-sensitive
            [' spell-out'],        // leading space
            ['none '],             // trailing space
            ['spellout'],          // missing hyphen
            ['normal none'],       // multiple keywords
            ['spell-out inherit'], // multiple keywords
            [''],                  // empty string
            [null],                // null value
            [true],                // boolean
            [false],
            [[]],                  // array
            [new \stdClass()],     // object
        ];
    }
}
