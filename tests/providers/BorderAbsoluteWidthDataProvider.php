<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class BorderAbsoluteWidthDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['thin'],
            ['medium'],
            ['thick'],
            ['1px'],
            ['0pt'],
            ['2.5mm'],
            ['+3cm'],
            ['.75in'],
            ['inherit'],
            ['0.1em'],
            ['1mm'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['thinn'],                  // misspelled keyword
            ['1'],                      // missing unit
            ['px1'],                    // invalid format
            ['1.'],                     // trailing dot without decimals
            ['1,5px'],                  // comma instead of dot
            ['1px discard'],            // no conditional length
            ['0.5em retain'],           // no conditional length
            ['1px 1px'],                // multiple lengths
            ['thin medium'],            // multiple keywords
            ['inherit 1px'],            // mixed keyword and value
            ['-0.1em'],                 // cannot be negative
            ['-1mm'],                   // cannot be negative
            [''],                       // empty string
            [null],                     // null value
            [true],                     // boolean
            [false],
            [[]],                       // array
            [new \stdClass()],          // object
        ];
    }
}
