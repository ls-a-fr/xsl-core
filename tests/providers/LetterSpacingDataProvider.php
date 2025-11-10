<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class LetterSpacingDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['normal'],
            ['0px'],
            ['1em'],
            ['-2pt'],
            ['+3mm'],
            ['.75in'],
            ['1em 1em 1em 1 discard'],
            ['0pt 0pt 0pt 0 retain'],
            ['1em force retain'],
            ['1em 1em 1em force retain'],
            ['-1mm -1mm -1mm 2 discard'],
            ['1em 1em 1em'],
            ['inherit'],
            ['1'],                          // precedence 1, 0pt. Is this valid?
            ['1em 1em 1em 1'],
            ['1em 1'],
            ['1em 1em'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['1.'],                         // trailing dot
            ['1,5em'],                      // comma instead of dot
            ['normal 1em'],                // multiple keywords/values
            ['inherit 0pt'],               // mixed keyword and value
            ['1em 1em 1em farce discard'],       // invalid precedence
            ['1em 1em 1em 1 maybe'],       // invalid conditionality
            [''],                          // empty string
            [null],                        // null value
            [true],                        // boolean
            [false],
            [[]],                          // array
            [new \stdClass()],             // object
        ];
    }
}
