<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class IntrinsicScaleValueDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['0%'],
            ['100%'],
            ['-50%'],
            ['+75.25%'],
            ['.5%'],
            ['+0.1%'],
            ['-0.0%'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['100'],               // missing percent sign
            ['%'],                 // missing number
            ['50 percent'],        // invalid unit
            ['50.%'],              // ends in dot
            ['1.2.3%'],            // malformed float
            ['--5%'],              // invalid negative
            ['+%'],                // malformed positive
            ['+'],                 // plus only
            [''],                  // empty string
            [null],                // null value
            [true],                // boolean
            [false],
            [[]],                  // array
            [new \stdClass()],     // object
        ];
    }
}
