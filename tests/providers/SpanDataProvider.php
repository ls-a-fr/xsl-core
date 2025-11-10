<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class SpanDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['none'],
            ['all'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['None'],            // case-sensitive
            ['all none'],        // multiple values
            ['none all'],        // multiple values
            ['none inherit'],    // multiple values
            [''],                // empty string
            [null],              // null value
            [true],              // boolean
            [false],
            [[]],                // array
            [new \stdClass()],   // object
        ];
    }
}
