<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class LengthDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            // Valid values
            ['0px'],
            ['1px'],
            ['10px'],
            ['-5px'],
            ['0.5px'],
            ['100pt'],
            ['0pt'],
            ['-2.3pt'],
            ['5mm'],
            ['0mm'],
            ['-1mm'],
            ['2in'],
            ['0in'],
            ['-0.5in'],
            ['3cm'],
            ['0cm'],
            ['-1.25cm'],
            ['1em'],
            ['0em'],
            ['-0.75em'],
            ['0.0001px'],
            ['.5em'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['10'],           // no unit
            ['px10'],         // incorrect format
            ['10 px'],        // space between number and unit
            ['tenpx'],        // non-numeric
            ['10percent'],    // invalid unit
            ['10.px'],        // malformed float
            ['1.2.3em'],      // invalid float
            ['--5px'],        // invalid negative
            ['5 px'],         // space in unit
            ['5p x'],         // invalid characters in unit
            ['5empx'],        // multiple units concatenated
            [''],             // empty string
            [null],           // null value
            [true],           // boolean
            [false],
            [[]],             // array
            [new \stdClass()], // object
        ];
    }
}
