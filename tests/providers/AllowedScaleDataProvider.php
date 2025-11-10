<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class AllowedScaleDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['any'],
            ['0%'],
            ['50%'],
            ['+25%'],
            ['-10%'],
            ['any any'],
            ['any 50%'],
            ['0% any 100%'],
            ['any any 0% 25%'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['%'],                   // missing number
            ['50'],                  // missing unit
            ['50 percent'],          // malformed unit
            ['any, 50%'],            // invalid separator
            ['any 50% extra'],       // "extra" is invalid
            ['inherit any'],         // mixed keyword and values
            ['50% inherit'],         // mixed keyword and values
            [''],                    // empty string
            [null],                  // null value
            [true],                  // boolean
            [false],
            [[]],                    // array
            [new \stdClass()],       // object
        ];
    }
}
