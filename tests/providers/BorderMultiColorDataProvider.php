<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class BorderMultiColorDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['inherit'],
            ['red'],
            ['#000000'],
            ['rgb(255,255,255)'],
            ['transparent'],
            ['red transparent'],
            ['#123456 #654321'],
            ['rgb(0,0,0) transparent #ffffff red'],
            ['transparent transparent transparent transparent'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            [''],                             // empty string
            ['#000'],                         // must be six hexadecimal characters
            ['rgb(0,0,0) transparent #fff red'], // must be six hexadecimal characters
            ['#zzz'],                         // invalid hex
            ['rgb(256,0,0)'],                 // invalid component
            ['red blue green yellow black'], // more than four values
            ['red #000 transparent red green'], // five values
            ['transparent red blue yellow green'], // five values
            ['rgb(0,0,0) rgb(0,0,0) rgb(0,0,0) rgb(0,0,0) red'], // five values
            ['#123456 #654321 #abcdef #112233 #334455'], // five values
            [null],                           // null value
            [true],                           // boolean
            [false],
            [[]],                             // array
            [new \stdClass()],                // object
        ];
    }
}
