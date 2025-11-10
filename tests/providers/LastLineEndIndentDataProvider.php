<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class LastLineEndIndentDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['0px'],
            ['10em'],
            ['-2pt'],
            ['+3mm'],
            ['.75in'],
            ['0%'],
            ['100%'],
            ['-25%'],
            ['+50%'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['1'],                   // missing unit
            ['1.'],                  // trailing dot
            ['1,5em'],               // comma instead of dot
            ['%'],                   // missing number
            ['10em 50%'],            // multiple values
            ['inherit 100%'],        // mixed keyword and value
            [''],                    // empty string
            [null],                  // null value
            [true],                  // boolean
            [false],
            [[]],                   // array
            [new \stdClass()],       // object
        ];
    }
}
