<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class SpaceAfterBeforeDataProvider
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
            ['0pt 0pt 0pt force retain'],
            ['0pt 0pt 0pt discard'],
            ['0pt 0pt 0pt 0'],
            ['1em'],
            ['1em retain'],
            ['1em force discard'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['0pt 0pt 0pt discard retain'],         // extra token
            ['0pt 0pt 0pt 0 maybe'],                // invalid conditionality
            ['0pt 0pt 0pt force force'],            // invalid: force not at precedence position
            ['0pt 0pt 0pt 0.5 discard'],            // invalid: precedence must be integer or 'force'
            ['inherit 0pt 0pt 0pt 0 discard'],      // mixed keyword and value
            [''],                                   // empty string
            [null],                                 // null value
            [true],                                 // boolean
            [false],
            [[]],                                   // array
            [new \stdClass()],                      // object
        ];
    }
}
