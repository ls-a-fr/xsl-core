<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class FontSizeDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['xx-small'],
            ['x-small'],
            ['small'],
            ['medium'],
            ['large'],
            ['x-large'],
            ['xx-large'],
            ['smaller'],
            ['larger'],
            ['0px'],
            ['1.5em'],
            ['-2pt'],
            ['+3mm'],
            ['.75in'],
            ['100%'],
            ['0%'],
            ['-25%'],
            ['+10%'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['xxsmall'],                  // missing hyphen
            ['larg'],                     // misspelled keyword
            ['larger smaller'],           // multiple keywords
            ['1'],                        // missing unit
            ['px1'],                      // malformed length
            ['1.'],                       // trailing dot without decimals
            ['1,5em'],                    // comma instead of dot
            ['%'],                        // missing number
            ['inherit 0%'],               // mixed keyword and value
            [''],                         // empty string
            [null],                       // null value
            [true],                       // boolean
            [false],
            [[]],                         // array
            [new \stdClass()],            // object
        ];
    }
}
