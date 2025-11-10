<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class UnicodeBidiDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['normal'],
            ['embed'],
            ['bidi-override'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Normal'],              // case-sensitive
            ['embed normal'],        // multiple values
            ['bidi_override'],       // invalid character
            [' bidi-override'],      // leading space
            ['inherit '],            // trailing space
            [''],                    // empty string
            [null],                  // null value
            [true],                  // boolean
            [false],
            [[]],                    // array
            [new \stdClass()],       // object
        ];
    }
}
