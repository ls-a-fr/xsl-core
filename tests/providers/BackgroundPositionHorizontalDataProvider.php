<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class BackgroundPositionHorizontalDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['0%'],
            ['50%'],
            ['-25%'],
            ['+100%'],
            ['0px'],
            ['10em'],
            ['-5pt'],
            ['+2.5cm'],
            ['.5in'],
            ['left'],
            ['center'],
            ['right'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['%'],                   // missing number in percentage
            ['10'],                  // missing unit
            ['px10'],                // invalid format
            ['1.'],                  // trailing dot without decimals
            ['1,5em'],               // comma instead of dot
            ['left center'],         // multiple keywords
            ['inherit 0%'],          // mixed keyword and value
            ['10px 20%'],            // multiple values
            ['centre'],              // invalid keyword
            [''],                    // empty string
            [null],                  // null value
            [true],                  // boolean
            [false],
            [[]],                    // array
            [new \stdClass()],       // object
        ];
    }
}
