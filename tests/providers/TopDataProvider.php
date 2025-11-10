<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class TopDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['0px'],
            ['1em'],
            ['-2.5pt'],
            ['100mm'],
            ['0.75in'],
            ['50%'],
            ['-10%'],
            ['+0%'],
            ['auto'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['10'],             // no unit
            ['px10'],           // malformed length
            ['10 px'],          // space in value
            ['ten%'],           // non-numeric percentage
            ['%'],              // missing number
            ['10percent'],      // invalid unit
            ['--5px'],          // invalid negative
            ['auto inherit'],   // multiple keywords
            ['1em 50%'],        // multiple values
            [''],               // empty string
            [null],             // null value
            [true],             // boolean
            [false],
            [[]],               // array
            [new \stdClass()],  // object
        ];
    }
}
