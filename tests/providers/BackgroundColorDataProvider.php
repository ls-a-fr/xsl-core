<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class BackgroundColorDataProvider
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
            ['transparent'],
            ['inherit'],
            ['rgb(0,0,0)'],
            ['rgb(255, 255, 255)'],
            ['rgb(1, 0.5, 0)'],
            ['rgb(0, .3, .6)'],
            ['rgb-icc(255, 0, 0, RGBColorProfile, 1, 0)'],
            ['rgb-icc(255,0,0,CMYKColorProfile,0,1)'],
            ['#ffffff'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['blak'],                   // misspelled keyword
            ['#FFF'],                   // colors should have six hexadecimal components
            ['#ffff'],                  // invalid hex (length)
            ['#fffffg'],                // invalid hex (non-hex chars)
            ['rgb(.3,.6,127)'],         // mixed real and byte
            ['rgb(1.,.6,.3)'],          // invalid decimal component
            ['rgb(256,0,0)'],           // out-of-range value
            ['rgba(0,0,0,1.5)'],        // wrong number of components
            ['rgb(0,0)'],               // missing component
            ['transparent red'],        // multiple values
            ['inherit #000'],           // mixed keyword and value
            ['rgb(0 0 0)'],             // wrong syntax (missing commas)
            ['rgb-icc(255,0,CMYKColorProfile,0,1)'], // wrong number of components
            ['rgb-icc(255,0,255,0,1)'], // missing color profile name
            ['rgb-icc(255,0,255,0,0,1)'], // invalid color profile name
            ['rgb-icc(255,0,0,UnknownProfile,0,0)'], // unreferenced color profile name (see test)
            [''],                       // empty string
            [null],                     // null value
            [true],                     // boolean
            [false],
            [[]],                       // array
            [new \stdClass()],          // object
        ];
    }
}
