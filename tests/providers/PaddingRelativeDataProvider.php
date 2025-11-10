<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class PaddingRelativeDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['0px'],
            ['1em'],
            ['2.5pt'],
            ['+3mm'],
            ['.75in'],
            ['100%'],
            ['0%'],
            ['+25%'],
            ['1px discard'],
            ['0.5em retain'],
            ['+2pt discard'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['1'],                      // missing unit
            ['px1'],                    // malformed length
            ['1.'],                     // trailing dot without decimals
            ['1,5em'],                  // comma instead of dot
            ['%'],                      // missing number for percentage
            ['discard'],                // missing length in length-conditional
            ['retain'],                 // missing length in length-conditional
            ['1px discard retain'],     // too many tokens
            ['100% 50%'],               // multiple values
            ['inherit 1em'],            // mixed keyword and value
            ['-0.25cm'],                // cannot be negative
            ['-50%'],                   // cannot be negative
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
