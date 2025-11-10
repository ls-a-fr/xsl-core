<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class PauseDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['inherit'],
            ['500ms'],
            ['1s'],
            ['0.5s'],
            ['250ms 750ms'],
            ['1s 50%'],
            ['75% 25%'],
            ['.5s .25s'],
            ['100ms 0.5s'],
            ['33.3% 66.6%'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            [''],                    // empty string
            ['500'],                 // missing unit
            ['ms'],                  // no number
            ['50%%'],                // malformed percentage
            ['1.'],                  // malformed float
            ['1s 2s 3s'],            // too many values
            ['1s inherit'],          // mixed with inherit
            ['inherit 1s'],          // mixed with inherit
            ['50% 50% 50%'],         // too many percentages
            ['1s 50% 100%'],         // three values
            [null],                  // null value
            [true],                  // boolean
            [false],
            [[]],                    // array
            [new \stdClass()],       // object
        ];
    }
}
