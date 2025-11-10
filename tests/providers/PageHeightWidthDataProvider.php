<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class PageHeightWidthDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['auto'],
            ['indefinite'],
            ['0px'],
            ['1em'],
            ['-2.5cm'],
            ['3mm'],
            ['0in'],
            ['+4.25pt'],
            ['.5in'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Auto'],                // case-sensitive
            ['indefinit'],           // typo
            ['auto indefinite'],     // multiple values
            ['1.'],                  // ends in dot without decimal part
            ['10'],                  // missing unit
            ['px10'],                // malformed unit
            ['10 px'],               // space between number and unit
            ['10percent'],           // wrong unit
            [''],                    // empty string
            [null],                  // null value
            [true],                  // boolean
            [false],
            [[]],                    // array
            [new \stdClass()],       // object
        ];
    }
}
