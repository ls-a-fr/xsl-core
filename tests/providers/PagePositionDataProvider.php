<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class PagePositionDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['only'],
            ['first'],
            ['last'],
            ['rest'],
            ['any'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Only'],              // case-sensitive
            ['first last'],        // multiple values
            ['rest_'],             // invalid character
            [' any'],              // leading space
            ['inherit '],          // trailing space
            [''],                  // empty string
            [null],                // null value
            [true],                // boolean
            [false],
            [[]],                  // array
            [new \stdClass()],     // object
        ];
    }
}
