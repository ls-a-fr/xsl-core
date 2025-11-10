<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class PageBreakInsideDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['avoid'],
            ['auto'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Avoid'],           // case-sensitive
            ['auto avoid'],      // multiple values
            ['none'],            // not allowed
            [''],                // empty string
            [null],              // null value
            [true],              // boolean
            [false],
            [[]],                // array
            [new \stdClass()],   // object
        ];
    }
}
