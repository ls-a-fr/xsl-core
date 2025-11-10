<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class BorderRelativeWidthDataProvider
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
            ['1px discard'],
            ['0.5em retain'],
            ['+2pt discard'],
            ['inherit'],
            ['0.1em'],
            ['1mm retain'],
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
            ['discard'],                // missing length in <length-conditional>
            ['retain'],                 // missing length in <length-conditional>
            ['1px discard retain'],     // too many tokens
            ['1px 1px'],                // multiple lengths
            ['thin medium'],            // multiple keywords
            ['inherit 1px'],            // mixed keyword and value
            ['-0.1em'],                 // cannot be negative
            ['-1mm retain'],            // cannot be negative
            [''],                       // empty string
            [null],                     // null value
            [true],                     // boolean
            [false],
            [[]],                       // array
            [new \stdClass()],          // object
        ];
    }
}
