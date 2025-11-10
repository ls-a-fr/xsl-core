<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class BackgroundPositionDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['inherit'],
            ['10%'],
            ['50% 50%'],
            ['0px'],
            ['10px 20px'],
            ['top'],
            ['bottom'],
            ['center'],
            ['left'],
            ['right'],
            ['top left'],
            ['bottom right'],
            ['center center'],
            ['top center'],
            ['center right'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['10'],                     // missing unit
            ['50% 50% 50%'],            // too many values
            ['top bottom'],             // multiple vertical positions
            ['left right center'],      // too many horizontal positions
            ['top 10%'],                // mix of keyword and numeric
            ['10% left'],               // numeric then keyword
            ['10px 20% 30%'],           // three values
            ['center center center'],   // excess
            [''],                       // empty string
            [null],                     // null value
            [true],                     // boolean
            [false],
            [[]],                       // array
            [new \stdClass()],          // object
        ];
    }
}
