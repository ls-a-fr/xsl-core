<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class VisibilityDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['visible'],
            ['hidden'],
            ['collapse'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Visible'],             // case-sensitive
            ['visible hidden'],      // multiple values
            ['collapsed'],           // invalid value
            [' hide'],               // leading space
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
