<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class TextShadowDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['none'],
            ['black 1px 0px'],
            ['red 0px 1px'],
            ['#000000 2px 2px'],
            ['rgb(100,100,100) 0px 0px'],
            ['blue 1px 1px 2px'],
            ['1px 2px'],                          // without color
            ['1px 2px 3px'],
            ['black 1px 2px 3px'],
            ['black 0px 0px, red 1px 1px'],       // multiple entries
            ['#123456 1px 2px, 2px 2px'],         // one with color, one without
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['#000 2px 2px'],                     // color must have six characters
            ['rgba(0,0,0,0.5) 0px 0px'],        // invalid color definition (no alpha)
            ['none black 1px 2px'],               // 'none' cannot be combined
            ['inherit 1px 2px'],                  // 'inherit' cannot be combined
            ['black'],                            // missing required lengths
            ['1px'],                              // only one length
            ['1px 2px 3px 4px'],                  // too many lengths
            ['#zzzzzz 1px 2px'],                  // invalid color
            ['black, 1px 2px'],                   // incorrect comma usage
            ['black 1px , red 1px'],              // incomplete triplet
            ['1px 2px,'],                         // trailing comma
            ['1px 2px 3px, , black 1px 2px'],      // empty item
            [''],                                 // empty string
            [null],                               // null value
            [true],                               // boolean
            [false],
            [[]],                                 // array
            [new \stdClass()],                    // object
        ];
    }
}
