<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class ShowDestinationDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['replace'],
            ['new'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Replace'],          // case-sensitive
            ['replace new'],      // multiple values
            ['renew'],            // invalid keyword
            [' new'],             // leading space
            ['replace '],         // trailing space
            [''],                 // empty string
            [null],               // null value
            [true],               // boolean
            [false],
            [[]],                 // array
            [new \stdClass()],    // object
        ];
    }
}
