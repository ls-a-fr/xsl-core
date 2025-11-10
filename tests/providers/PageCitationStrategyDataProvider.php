<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class PageCitationStrategyDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['all'],
            ['normal'],
            ['non-blank'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['All'],               // case-sensitive
            ['normal non-blank'],  // multiple values
            ['non_blank'],         // underscore not allowed
            [' non-blank'],        // leading space
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
