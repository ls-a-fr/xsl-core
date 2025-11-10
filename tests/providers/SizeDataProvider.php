<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class SizeDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['auto'],
            ['landscape'],
            ['portrait'],
            ['inherit'],
            ['210mm'],
            ['8.5in'],
            ['297mm 210mm'],
            ['11in 8.5in'],
            ['100px 200px'],
            ['21cm'],
            ['21cm 29.7cm'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            [''],                         // empty string
            ['landscape portrait'],       // multiple named values
            ['auto 210mm'],               // mixed keyword and length
            ['210mm 297mm 100mm'],        // too many lengths
            ['210'],                      // missing unit
            ['mm'],                       // unit without number
            ['10.px'],                    // malformed value
            ['297mm inherit'],            // mixed with inherit
            ['portrait 210mm'],           // mixed named and length
            ['21cm 29.7cm 10cm'],         // three lengths
            [null],                       // null
            [true],                       // boolean
            [false],
            [[]],                         // array
            [new \stdClass()],            // object
        ];
    }
}
