<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class MarginDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['0px'],
            ['1em'],
            ['-2pt'],
            ['+3mm'],
            ['.75in'],
            ['100%'],
            ['0%'],
            ['-50%'],
            ['+25%'],
            ['auto'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['1'],                  // missing unit
            ['px1'],                // malformed length
            ['1.'],                 // trailing dot without decimals
            ['1,5em'],              // comma instead of dot
            ['%'],                  // missing number
            ['auto 1em'],           // multiple values
            ['inherit auto'],       // multiple keywords
            ['1em 50%'],            // multiple values
            [''],                   // empty string
            [null],                 // null value
            [true],                 // boolean
            [false],
            [[]],                   // array
            [new \stdClass()],      // object
        ];
    }
}
