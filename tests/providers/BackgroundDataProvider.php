<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class BackgroundDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['inherit'],
            ['red'],
            ['url(image.png)'],
            ['no-repeat'],
            ['scroll'],
            ['left'],
            ['top'],
            ['center'],
            ['#fff url(bg.png) no-repeat scroll left'],
            ['url(bg.jpg) no-repeat'],
            ['#000 scroll'],
            ['url(image.svg) top left'],
            ['center center scroll'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['url()'],                        // empty URL
            ['repeat repeat'],               // duplicate component
            ['url(image.png) red'],          // wrong order
            ['scroll no-repeat red'],        // wrong order
            ['top center center'],           // too many position values
            ['url(image.png) url(bg.jpg)'],  // multiple images
            ['#ggg'],                         // invalid color
            ['red red'],                     // duplicate color
            ['image.png'],                   // not a proper url()
            [''],                            // empty string
            [null],                          // null value
            [true],                          // boolean
            [false],
            [[]],                            // array
            [new \stdClass()],               // object
        ];
    }
}
