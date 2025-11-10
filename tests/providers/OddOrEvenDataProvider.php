<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class OddOrEvenDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['odd'],
            ['even'],
            ['any'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Odd'],              // case-sensitive
            ['odd even'],         // multiple values
            ['any_odd'],          // underscore not allowed
            ['even '],            // trailing space
            [' inherit'],         // leading space
            [''],                 // empty string
            [null],               // null value
            [true],               // boolean
            [false],
            [[]],                 // array
            [new \stdClass()],    // object
        ];
    }
}
