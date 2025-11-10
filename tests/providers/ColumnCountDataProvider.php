<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class ColumnCountDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['0'],
            ['1'],
            ['-1'],
            ['+1'],
            ['123'],
            ['-999'],
            ['0.0'],
            ['1.5'],
            ['-2.75'],
            ['+0.001'],
            ['.5'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['1.'],               // trailing dot without decimals
            ['+'],                // sign without digits
            ['-'],                // sign without digits
            ['number'],           // non-numeric string
            ['1 2'],              // space-separated digits
            ['1.2.3'],            // multiple decimal points
            ['1,5'],              // comma instead of dot
            ['inherit 1'],        // mixed keyword and number
            ['0 inherit'],        // multiple values
            [''],                 // empty string
            [null],               // null value
            [true],               // boolean
            [false],
            [[]],                 // array
            [new \stdClass()],    // object
        ];
    }
}
