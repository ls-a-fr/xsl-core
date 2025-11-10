<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class ScalingDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['uniform'],
            ['non-uniform'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Uniform'],                // case-sensitive
            [' non-uniform'],           // leading space
            ['non-uniform '],           // trailing space
            ['uniform non-uniform'],    // multiple keywords
            ['nonuniform'],             // malformed keyword
            ['inherit uniform'],        // multiple keywords
            [''],                       // empty string
            [null],                     // null value
            [true],                     // boolean
            [false],
            [[]],                       // array
            [new \stdClass()],          // object
        ];
    }
}
