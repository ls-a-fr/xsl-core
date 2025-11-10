<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class PaddingAbsoluteDataProvider
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
            ['50%'],
            ['.25cm'],
            ['0%'],
            ['+25%'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['1'],                  // missing unit
            ['px1'],                // malformed length
            ['1.'],                 // trailing dot without decimals
            ['1,5em'],              // comma instead of dot
            ['%'],                  // missing number
            ['1px 50%'],            // multiple values
            ['inherit 1em'],        // mixed keyword and value
            ['discard'],            // not allowed here (no <length-conditional>)
            ['retain'],             // not allowed here (no <length-conditional>)
            ['-0.25cm'],            // padding can be negative
            ['-50%'],               // padding can be negative
            [''],                   // empty string
            [null],                 // null value
            [true],                 // boolean
            [false],
            [[]],                   // array
            [new \stdClass()],      // object
        ];
    }
}
