<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class AzimuthDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['0deg'],
            ['90deg'],
            ['-45deg'],
            ['180grad'],
            ['3.14rad'],
            ['+270deg'],
            ['left'],
            ['right'],
            ['center'],
            ['far-left'],
            ['far-right'],
            ['left-side'],
            ['right-side'],
            ['center-left'],
            ['center-right'],
            ['leftwards'],
            ['rightwards'],
            ['left behind'],
            ['center-right behind'],
            ['far-left behind'],
            ['behind left'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['45'],                 // missing unit
            ['deg45'],              // invalid format
            ['90 deg'],             // space in angle
            ['180degrees'],         // invalid unit
            ['center behind left'], // too many tokens
            ['leftwards behind'],  // not allowed combination
            ['lef'],                // invalid token
            [''],                   // empty string
            [null],                 // null value
            [true],                 // boolean
            [false],
            [[]],                   // array
            [new \stdClass()],      // object
        ];
    }
}
