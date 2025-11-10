<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class ChangeBarColorDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['aqua'],
            ['black'],
            ['blue'],
            ['fuchsia'],
            ['gray'],
            ['green'],
            ['lime'],
            ['maroon'],
            ['navy'],
            ['olive'],
            ['purple'],
            ['red'],
            ['silver'],
            ['teal'],
            ['white'],
            ['yellow'],
            ['#ffffff'],
            ['#abcdef'],
            ['rgb(0,0,0)'],
            ['rgb(255,255,255)'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['inherit'],                 // inherit not allowed on ChangeBarColor
            ['#000'],                    // six characters mandatory
            ['rgba(255,0,0,0.5)'],     // rgba not supported
            ['blak'],                    // misspelled keyword
            ['#ffff'],                   // invalid hex length
            ['#fffffg'],                 // invalid hex character
            ['rgb(256,0,0)'],            // out-of-range RGB
            ['rgb(0,0)'],                // missing component
            ['rgba(0,0,0)'],             // missing alpha
            ['rgb(0 0 0)'],              // wrong syntax (missing commas)
            ['inherit red'],             // multiple values
            [''],                        // empty string
            [null],                      // null value
            [true],                      // boolean
            [false],
            [[]],                        // array
            [new \stdClass()],           // object
        ];
    }
}
