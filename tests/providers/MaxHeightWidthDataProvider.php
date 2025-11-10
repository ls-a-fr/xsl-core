<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class MaxHeightWidthDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['0px'],
            ['10em'],
            ['+3mm'],
            ['.75in'],
            ['2pt'],
            ['25%'],
            ['0%'],
            ['100%'],
            ['+50%'],
            ['none'],
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
            ['none 10em'],           // multiple values
            ['inherit 50%'],         // mixed keyword and value
            ['10em 100%'],           // multiple values
            ['None'],                // case-sensitive
            ['auto'],                // invalid on max-width or max-height
            [''],                    // empty string
            [null],                  // null value
            [true],                  // boolean
            [false],
            [[]],                   // array
            [new \stdClass()],       // object
        ];
    }
}
