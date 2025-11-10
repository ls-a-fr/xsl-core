<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class SpeakHeaderDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['once'],
            ['always'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Once'],            // case-sensitive
            [' always'],         // leading space
            ['always '],         // trailing space
            ['once always'],     // multiple keywords
            ['inherit once'],    // multiple keywords
            ['sometimes'],       // invalid keyword
            [''],                // empty string
            [null],              // null value
            [true],              // boolean
            [false],
            [[]],                // array
            [new \stdClass()],   // object
        ];
    }
}
