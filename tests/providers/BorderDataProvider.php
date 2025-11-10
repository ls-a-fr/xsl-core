<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class BorderDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['inherit'],
            ['thin'],
            ['medium'],
            ['thick'],
            ['1px'],
            ['solid'],
            ['dotted'],
            ['dashed'],
            ['double'],
            ['#000000'],
            ['rgb(0,0,0)'],
            ['transparent'],
            ['1px solid'],
            ['solid 1px'],
            ['solid #000000'],
            ['thick dotted #123456'],
            ['2px dashed rgb(255,255,255)'],
            ['1em groove red'],
            ['medium double transparent'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['#000'],                        // six hexadecimals character needed
            ['solid #000'],              // six hexadecimals character needed
            ['1'],                           // missing unit
            ['px1'],                         // malformed unit
            ['solid solid'],                // duplicate style
            ['#zzz'],                        // invalid color
            ['rgb(256,0,0)'],                // out of range
            ['#000 thick solid'],            // wrong order
            ['solid dotted'],                // multiple styles
            ['1px 2px'],                     // two widths
            ['red blue'],                    // multiple colors
            [''],                            // empty string
            [null],                          // null value
            [true],                          // boolean
            [false],
            [[]],                            // array
            [new \stdClass()],               // object
        ];
    }
}
