<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class IntrusionDisplaceDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['auto'],
            ['none'],
            ['line'],
            ['indent'],
            ['block'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Auto'],                 // case-sensitive
            ['none auto'],            // multiple values
            ['line-block'],           // invalid combination
            [' indent'],              // leading space
            ['block '],               // trailing space
            [''],                     // empty string
            [null],                   // null value
            [true],                   // boolean
            [false],
            [[]],                     // array
            [new \stdClass()],        // object
        ];
    }
}
