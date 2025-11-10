<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class SpeechRateDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['0'],
            ['1'],
            ['-1'],
            ['+1'],
            ['2.5'],
            ['.5'],
            ['0.0'],
            ['+0.01'],
            ['-3.75'],
            ['x-slow'],
            ['slow'],
            ['medium'],
            ['fast'],
            ['x-fast'],
            ['faster'],
            ['slower'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['1.'],                // trailing dot without decimals
            ['+'],                 // sign without digits
            ['-'],                 // sign without digits
            ['1 2'],               // space-separated digits
            ['1.2.3'],             // multiple decimal points
            ['1,5'],               // comma instead of dot
            ['fast slower'],       // multiple keywords
            ['inherit 1'],         // mixed keyword and number
            ['medium +1'],         // multiple values
            ['xs-low'],            // invalid keyword
            [''],                  // empty string
            [null],                // null value
            [true],                // boolean
            [false],
            [[]],                  // array
            [new \stdClass()],     // object
        ];
    }
}
