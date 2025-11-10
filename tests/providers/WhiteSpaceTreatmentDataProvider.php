<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class WhiteSpaceTreatmentDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['ignore'],
            ['preserve'],
            ['ignore-if-before-linefeed'],
            ['ignore-if-after-linefeed'],
            ['ignore-if-surrounding-linefeed'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Ignore'],                                     // case-sensitive
            ['ignore if before linefeed'],                  // missing hyphens
            ['preserve ignore'],                            // multiple keywords
            ['ignore-if-beforelinefeed'],                   // malformed keyword
            ['ignore-if-surrounding-linefeed inherit'],     // multiple keywords
            [''],                                           // empty string
            [null],                                         // null value
            [true],                                         // boolean
            [false],
            [[]],                                           // array
            [new \stdClass()],                              // object
        ];
    }
}
