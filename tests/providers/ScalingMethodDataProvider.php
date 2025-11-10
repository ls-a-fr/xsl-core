<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class ScalingMethodDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['auto'],
            ['integer-pixels'],
            ['resample-any-method'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Auto'],                          // case-sensitive
            [' integer-pixels'],              // leading space
            ['resample-any-method '],         // trailing space
            ['auto integer-pixels'],          // multiple keywords
            ['resampleanymethod'],            // malformed keyword
            ['inherit resample-any-method'],  // multiple keywords
            [''],                             // empty string
            [null],                           // null value
            [true],                           // boolean
            [false],
            [[]],                             // array
            [new \stdClass()],                // object
        ];
    }
}
