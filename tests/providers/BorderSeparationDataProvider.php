<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class BorderSeparationDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['0px 0px'],
            ['10pt 5em'],
            ['-2.5cm +3mm'],
            ['0in 0in'],
            ['.5em -.25pt'],
            ['+1.2cm -1.2cm'],
            ['0px'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['0px 10'],                   // second value missing unit
            ['10pt px'],                  // second value missing numeric part
            ['10. pt 5em'],               // malformed float
            ['--2cm +3mm'],               // invalid negative
            ['2em 2em 2em'],              // too many values
            ['2em,2em'],                  // comma instead of space
            [''],                         // empty string
            [null],                       // null value
            [true],                       // boolean
            [false],
            [[]],                         // array
            [new \stdClass()],            // object
        ];
    }
}
