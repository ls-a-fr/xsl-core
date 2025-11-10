<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class HyphenationLadderCountDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['no-limit'],
            ['0'],
            ['1'],
            ['-1'],
            ['+1'],
            ['+25'],
            ['+9'],
            ['9'],
            ['25'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['No-Limit'],          // case-sensitive
            ['no limit'],          // missing hyphen
            ['1.'],                // trailing dot
            ['+'],                 // sign without digits
            ['-'],                 // sign without digits
            ['1,5'],               // comma instead of dot
            ['0.0'],               // integer greater than or equal to 1
            ['1.5'],               // integer greater than or equal to 1
            ['-2.75'],             // integer greater than or equal to 1
            ['+0.001'],            // integer greater than or equal to 1
            ['.5'],                // integer greater than or equal to 1
            ['no-limit 1'],        // multiple values
            ['inherit 0'],         // mixed keyword and value
            [''],                  // empty string
            [null],                // null value
            [true],                // boolean
            [false],
            [[]],                  // array
            [new \stdClass()],     // object
        ];
    }
}
