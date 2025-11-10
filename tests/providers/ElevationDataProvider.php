<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class ElevationDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['0deg'],
            ['+90deg'],
            ['-180deg'],
            ['270grad'],
            ['3.1416rad'],
            ['below'],
            ['level'],
            ['above'],
            ['higher'],
            ['lower'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['90'],                // missing unit
            ['deg90'],             // malformed angle
            ['180 degrees'],       // invalid unit
            ['above below'],       // multiple keywords
            ['level higher'],      // multiple values
            ['0deg above'],        // mixed value and keyword
            [''],                  // empty string
            [null],                // null value
            [true],                // boolean
            [false],
            [[]],                  // array
            [new \stdClass()],     // object
        ];
    }
}
