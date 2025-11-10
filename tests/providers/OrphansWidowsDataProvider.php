<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class OrphansWidowsDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['0'],
            ['1'],
            ['+5'],
            ['123'],
            ['+0'],
            ['001'],              // leading zero (not strictly invalid but often discouraged)
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['-1'],               // only positive values are allowed
            ['-9999'],            // only positive values are allowed
            ['1.0'],              // not an integer
            ['+'],                // sign without digits
            ['-'],                // sign without digits
            ['+1.0'],             // decimal with sign
            ['--5'],              // double sign
            ['1 2'],              // multiple values
            ['inherit 1'],        // mixed keyword and value
            [''],                 // empty string
            [null],               // null value
            [true],               // boolean
            [false],
            [[]],                 // array
            [new \stdClass()],    // object
        ];
    }
}
