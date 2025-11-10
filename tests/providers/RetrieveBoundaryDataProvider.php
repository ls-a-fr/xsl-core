<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class RetrieveBoundaryDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['page'],
            ['page-sequence'],
            ['document'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Page'],                   // case-sensitive
            ['page_sequence'],          // underscore not allowed
            ['page document'],          // multiple values
            ['page-sequence '],         // trailing space
            [' document'],              // leading space
            ['pagesequence'],           // missing hyphen
            [''],                       // empty string
            [null],                     // null value
            [true],                     // boolean
            [false],
            [[]],                       // array
            [new \stdClass()],          // object
        ];
    }
}
