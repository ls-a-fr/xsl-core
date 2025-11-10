<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class PaddingMultiDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['inherit'],
            ['10px'],
            ['5%'],
            ['0px 3em'],
            ['10px 5%'],
            ['1em 2em 3em'],
            ['0pt 10pt 20px'],
            ['10px 20px 30px 40px'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            [''],                                   // empty string
            ['10'],                                 // missing unit
            ['px'],                                 // incomplete unit
            ['10px 20px 30px 40px 50px'],           // too many values
            ['0px auto'],                           // auto is not allowed in padding
            ['auto auto auto auto'],                // auto is not allowed in padding
            ['inherit 10px'],                       // mixed with inherit
            ['10px inherit'],                       // mixed with inherit
            ['10px, 20px'],                         // comma-separated
            ['10px 20 percent'],                    // invalid unit
            ['10.'],                                // malformed number
            ['10pxpx'],                             // invalid unit format
            [null],                                 // null value
            [true],                                 // boolean
            [false],
            [[]],                                   // array
            [new \stdClass()],                      // object
        ];
    }
}
