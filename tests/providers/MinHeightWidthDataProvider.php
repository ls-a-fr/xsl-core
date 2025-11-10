<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class MinHeightWidthDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['0px'],
            ['10em'],
            ['+3mm'],
            ['2pt'],
            ['25%'],
            ['.75in'],
            ['0%'],
            ['100%'],
            ['+50%'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['1'],                   // missing unit
            ['1.'],                  // trailing dot
            ['1,5em'],               // comma instead of dot
            ['-2pt'],                // negative values are illegal
            ['-25%'],                // negative values are illegal
            ['%'],                   // missing number
            ['10em 50%'],            // multiple values
            ['inherit 100%'],        // mixed keyword and value
            ['auto'],                // invalid on min-width or min-height
            ['none'],                // invalid on min-width or min-height
            [''],                    // empty string
            [null],                  // null value
            [true],                  // boolean
            [false],
            [[]],                   // array
            [new \stdClass()],       // object
        ];
    }
}
