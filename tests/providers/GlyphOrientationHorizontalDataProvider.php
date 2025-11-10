<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class GlyphOrientationHorizontalDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['0deg'],
            ['90deg'],
            ['-180deg'],
            ['+270deg'],
            ['360deg'],
            ['0.5rad'],
            ['-1.25rad'],
            ['+3.14rad'],
            ['100grad'],
            ['-200grad'],
            ['.75deg'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['90'],                // missing unit
            ['deg90'],             // malformed
            ['90 deg'],            // space between number and unit
            ['ninetydeg'],         // non-numeric
            ['45degrees'],         // invalid unit
            ['30.'],               // ends in dot
            ['1.2.3rad'],          // multiple decimals
            ['--90deg'],           // invalid negative
            ['deg'],               // missing number
            [''],                  // empty string
            [null],                // null value
            [true],                // boolean
            [false],
            [[]],                  // array
            [new \stdClass()],     // object
        ];
    }
}
