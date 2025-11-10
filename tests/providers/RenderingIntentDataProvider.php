<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class RenderingIntentDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['auto'],
            ['perceptual'],
            ['relative-colorimetric'],
            ['saturation'],
            ['absolute-colorimetric'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Auto'],                               // case-sensitive
            [' relative-colorimetric'],            // leading space
            ['saturation '],                        // trailing space
            ['perceptual saturation'],              // multiple keywords
            ['relativecolorimetric'],               // malformed keyword
            ['inherit perceptual'],                 // multiple keywords
            [''],                                   // empty string
            [null],                                 // null value
            [true],                                 // boolean
            [false],
            [[]],                                   // array
            [new \stdClass()],                      // object
        ];
    }
}
