<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class SpaceEndStartDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['0pt 0pt 0pt 0 discard'],
            ['1em 1em 1em 1 retain'],
            ['2pt 3pt 4pt 5 discard'],
            ['0.5em 0.5em 0.5em 2 retain'],
            ['-1mm -1mm -1mm 0 discard'],
            ['0pt 0pt 0pt -1 discard'],
            ['0pt 0pt 0pt discard'],
            ['0pt 0pt 0pt 0'],
            ['0pt 0pt 100% 0 discard'],
            ['1em'],
            ['1em retain'],
            ['1em force discard'],
            ['100%'],
            ['0%'],
            ['-25%'],
            ['+50%'],
            ['0% 0%'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['0pt 0pt 0pt discard retain'],         // too many tokens
            ['0pt 0pt 0pt 0 maybe'],                // invalid conditionality
            ['0pt 0pt 0pt 0.5 discard'],            // precedence must be integer or "force"
            ['0pt 0pt 0pt force force'],            // too many tokens
            ['inherit 0%'],                         // mixed keyword and value
            [''],                                   // empty string
            [null],                                 // null value
            [true],                                 // boolean
            [false],
            [[]],                                   // array
            [new \stdClass()],                      // object
        ];
    }
}
