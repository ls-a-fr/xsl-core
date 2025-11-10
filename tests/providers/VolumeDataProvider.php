<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class VolumeDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['0'],
            ['1'],
            ['-1'],
            ['+1'],
            ['0.5'],
            ['.25'],
            ['+2.75'],
            ['-3.0'],
            ['100%'],
            ['0%'],
            ['-25%'],
            ['+50%'],
            ['silent'],
            ['x-soft'],
            ['soft'],
            ['medium'],
            ['loud'],
            ['x-loud'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['1.'],                    // trailing dot without decimals
            ['%'],                     // missing number
            ['1,5'],                   // comma instead of dot
            ['xsoft'],                 // malformed keyword
            ['louder'],                // invalid keyword
            ['soft loud'],             // multiple keywords
            ['inherit 1'],             // mixed keyword and number
            ['+'],                     // sign without number
            ['-'],                     // sign without number
            ['0.5 50%'],               // multiple values
            [''],                      // empty string
            [null],                    // null value
            [true],                    // boolean
            [false],
            [[]],                      // array
            [new \stdClass()],         // object
        ];
    }
}
