<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class MarginMultiDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['inherit'],
            ['10px'],
            ['5%'],
            ['auto'],
            ['10px auto'],
            ['5% 10%'],
            ['auto auto'],
            ['10px 5% auto'],
            ['10px 5% auto 0px'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            [''],                                   // empty string
            ['10'],                                 // missing unit
            ['px'],                                 // unit without number
            ['10px 5% auto 0px 2px'],               // more than four values
            ['inherit 10px'],                       // mixed with inherit
            ['10px inherit'],                       // mixed with inherit
            ['auto auto auto auto auto'],           // five values
            ['10px, 5%'],                           // commas not allowed
            ['10px 5 percent'],                     // invalid unit
            ['10.'],                                // malformed number
            [null],                                 // null value
            [true],                                 // boolean
            [false],
            [[]],                                   // array
            [new \stdClass()],                      // object
        ];
    }
}
