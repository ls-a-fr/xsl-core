<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class LineHeightDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['normal'],
            ['0px'],
            ['10em'],
            ['2pt'],
            ['+3mm'],
            ['.75in'],
            ['0'],
            ['1.5'],
            ['+0.001'],
            ['.5'],
            ['0%'],
            ['1'],
            ['100%'],
            ['25%'],
            ['+50%'],
            ['1em 1em 1em 0 discard'],
            ['0pt 0pt 0pt 1 retain'],
            ['1em discard'],
            ['0pt retain'],
            ['3pt 1 retain'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['1.'],                       // trailing dot in number
            ['1,5em'],                    // comma instead of dot
            ['%'],                        // missing number in percentage
            ['-2pt'],                    // negative values are illegal
            ['-2.75'],                   // negative values are illegal
            ['-25%'],                    // negative values are illegal
            ['normal 1em'],              // multiple values
            ['inherit 0%'],              // mixed keyword and value
            ['1em 1em 1em 1 maybe'],     // invalid conditionality
            [''],                        // empty string
            [null],                      // null value
            [true],                      // boolean
            [false],
            [[]],                        // array
            [new \stdClass()],           // object
        ];
    }
}
