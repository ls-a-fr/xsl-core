<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class ContentDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['auto'],
            ['scale-to-fit'],
            ['scale-down-to-fit'],
            ['scale-up-to-fit'],
            ['0px'],
            ['10em'],
            ['-2pt'],
            ['+3mm'],
            ['.75in'],
            ['0%'],
            ['100%'],
            ['-25%'],
            ['+50%'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Auto'],                          // case-sensitive
            ['scale to fit'],                 // missing hyphens
            ['scaletofit'],                   // malformed keyword
            ['1'],                             // missing unit
            ['1.'],                            // trailing dot
            ['1,5em'],                         // comma instead of dot
            ['%'],                             // missing number
            ['scale-to-fit auto'],            // multiple keywords
            ['inherit 100%'],                 // mixed keyword and value
            ['10em 50%'],                     // multiple values
            [''],                              // empty string
            [null],                            // null value
            [true],                            // boolean
            [false],
            [[]],                              // array
            [new \stdClass()],                 // object
        ];
    }
}
