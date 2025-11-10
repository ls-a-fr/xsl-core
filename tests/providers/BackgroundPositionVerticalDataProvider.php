<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class BackgroundPositionVerticalDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['0%'],
            ['100%'],
            ['-50%'],
            ['+25%'],
            ['0px'],
            ['15pt'],
            ['-3.5em'],
            ['+1.25cm'],
            ['.75in'],
            ['top'],
            ['center'],
            ['bottom'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['%'],                    // missing number in percentage
            ['20'],                   // missing unit
            ['px20'],                 // invalid format
            ['2.'],                   // trailing dot without decimals
            ['2,5em'],                // comma instead of dot
            ['top bottom'],           // multiple keywords
            ['inherit 50%'],          // mixed keyword and value
            ['10px 50%'],             // multiple values
            ['centre'],               // invalid keyword
            [''],                     // empty string
            [null],                   // null value
            [true],                   // boolean
            [false],
            [[]],                     // array
            [new \stdClass()],        // object
        ];
    }
}
