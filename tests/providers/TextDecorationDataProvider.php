<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class TextDecorationDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['none'],
            ['underline'],
            ['no-underline'],
            ['overline'],
            ['no-overline'],
            ['line-through'],
            ['no-line-through'],
            ['blink'],
            ['no-blink'],
            ['underline overline'],
            ['underline no-overline'],
            ['no-underline line-through'],
            ['no-underline no-line-through blink'],
            ['underline overline line-through blink'],
            ['no-underline no-overline no-line-through no-blink'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['none underline'],                   // 'none' cannot be combined
            ['underline none'],                   // 'none' cannot be combined
            ['inherit underline'],                // 'inherit' cannot be combined
            ['underline blink overline underline'], // duplicate value
            ['underline no-underline'],           // mutually exclusive
            ['overline no-overline'],             // mutually exclusive
            ['line-through no-line-through'],     // mutually exclusive
            ['blink no-blink'],                   // mutually exclusive
            ['under-line'],                       // invalid keyword
            [''],                                 // empty string
            [null],                               // null value
            [true],                               // boolean
            [false],
            [[]],                                 // array
            [new \stdClass()],                    // object
        ];
    }
}
