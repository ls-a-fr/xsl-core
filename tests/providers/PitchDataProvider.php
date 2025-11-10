<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class PitchDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['0Hz'],
            ['100Hz'],
            ['440.0Hz'],
            ['+250Hz'],
            ['-50Hz'],
            ['0kHz'],
            ['1.5kHz'],
            ['+2kHz'],
            ['-0.75kHz'],
            ['x-low'],
            ['low'],
            ['medium'],
            ['high'],
            ['x-high'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['440'],               // missing unit
            ['Hz440'],             // malformed frequency
            ['1.5kilohertz'],      // invalid unit
            ['1.Hz'],              // missing decimal
            ['xlow'],              // invalid keyword
            ['low medium'],        // multiple keywords
            ['0Hz x-low'],         // mixed value and keyword
            [''],                  // empty string
            [null],                // null value
            [true],                // boolean
            [false],
            [[]],                  // array
            [new \stdClass()],     // object
        ];
    }
}
