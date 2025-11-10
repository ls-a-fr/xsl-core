<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class ReferenceOrientationDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['0'],
            ['90'],
            ['180'],
            ['270'],
            ['-90'],
            ['-180'],
            ['-270'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['45'],                  // not an allowed value
            ['-45'],                 // not an allowed value
            ['360'],                 // not in the defined set
            ['90 180'],              // multiple values
            ['0deg'],                // unit not allowed
            ['+90'],                 // plus sign not specified
            [''],                    // empty string
            [null],                  // null value
            [true],                  // boolean
            [false],
            [[]],                    // array
            [new \stdClass()],       // object
        ];
    }
}
