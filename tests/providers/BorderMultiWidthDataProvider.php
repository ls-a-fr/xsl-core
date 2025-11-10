<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class BorderMultiWidthDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['inherit'],
            ['thin'],
            ['medium'],
            ['thick'],
            ['1px'],
            ['0pt'],
            ['0.5em'],
            ['thin medium'],
            ['1px thick'],
            ['1px 2px 3px'],
            ['thin medium thick 1px'],
            ['0px 0px 0px 0px'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            [''],                               // empty string
            ['thin medium thick 1px thick'],    // more than four values
            ['1'],                              // missing unit
            ['px'],                             // incomplete unit
            ['10px 20'],                        // second value missing unit
            ['thin thick thick medium thick'], // five values
            ['inherit thin'],                  // mixed with inherit
            ['thin inherit'],                  // mixed with inherit
            ['thin,medium'],                   // commas not allowed
            ['1.2.3px'],                        // malformed float
            ['10.px'],                          // malformed
            ['10pxpx'],                         // invalid unit
            [null],                             // null value
            [true],                             // boolean
            [false],
            [[]],                               // array
            [new \stdClass()],                  // object
        ];
    }
}
