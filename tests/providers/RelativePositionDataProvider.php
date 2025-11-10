<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class RelativePositionDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['static'],
            ['relative'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Static'],              // case-sensitive
            [' relative'],           // leading space
            ['static '],             // trailing space
            ['static relative'],     // multiple keywords
            ['relativ'],             // misspelled keyword
            ['inherit static'],      // multiple keywords
            [''],                    // empty string
            [null],                  // null value
            [true],                  // boolean
            [false],
            [[]],                    // array
            [new \stdClass()],       // object
        ];
    }
}
