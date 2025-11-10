<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class LinefeedTreatmentDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['ignore'],
            ['preserve'],
            ['treat-as-space'],
            ['treat-as-zero-width-space'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Ignore'],                              // case-sensitive
            ['treat as space'],                      // missing hyphens
            ['preserve treat-as-space'],             // multiple keywords
            ['treat-as-0-width-space'],              // malformed keyword
            ['inherit treat-as-space'],              // multiple keywords
            [''],                                    // empty string
            [null],                                  // null value
            [true],                                  // boolean
            [false],
            [[]],                                    // array
            [new \stdClass()],                       // object
        ];
    }
}
