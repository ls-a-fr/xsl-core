<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class ClipDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['auto'],
            ['inherit'],
            ['rect(0px, 0px, 0px, 0px)'],
            ['rect(1em, 2em, 3em, 4em)'],
            ['rect(-1px, -2px, -3px, -4px)'],
            ['rect(auto, auto, auto, auto)'],
            ['rect(0px, auto, 10px, auto)'],
            ['rect(1.5em, 2.25em, -3.75em, auto)'],
            ['rect(+5px, -5px, 0px, auto)'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['rect()'],                             // empty
            ['rect(1px, 2px, 3px)'],                // missing value
            ['rect(1px 2px 3px 4px)'],              // missing commas
            ['rect(1px, 2px, 3px, 4px, 5px)'],       // too many values
            ['rect(1, 2, 3, 4)'],                   // missing units
            ['rect(1px,2px,3px,auto'],              // missing closing parenthesis
            ['rectangle(1px, 2px, 3px, 4px)'],       // invalid function name
            ['rect(auto, inherit, auto, auto)'],     // "inherit" not allowed inside rect
            ['inherit auto'],                        // multiple values
            [''],                                    // empty string
            [null],                                  // null value
            [true],                                  // boolean
            [false],
            [[]],                                    // array
            [new \stdClass()],                       // object
        ];
    }
}
