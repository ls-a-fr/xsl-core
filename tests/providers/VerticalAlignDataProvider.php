<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class VerticalAlignDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['baseline'],
            ['middle'],
            ['sub'],
            ['super'],
            ['text-top'],
            ['text-bottom'],
            ['top'],
            ['bottom'],
            ['inherit'],
            ['50%'],
            ['0%'],
            ['100%'],
            ['0px'],
            ['1.5em'],
            ['-10pt'],
            ['.5cm'],
            ['+3mm'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            [''],                       // empty string
            ['base-line'],              // invalid token
            ['texttop'],                // typo
            ['top bottom'],             // multiple values
            ['10'],                     // missing unit
            ['px'],                     // unit without number
            ['100%%'],                  // malformed percentage
            ['10.px'],                  // malformed float
            ['1.2.3em'],                // invalid float
            ['inherit baseline'],       // mixed values
            ['baseline inherit'],       // mixed values
            [null],                     // null value
            [true],                     // boolean
            [false],
            [[]],                       // array
            [new \stdClass()],          // object
        ];
    }
}
