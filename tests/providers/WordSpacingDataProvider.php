<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class WordSpacingDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['normal'],
            ['0px'],
            ['10em'],
            ['-2pt'],
            ['+3mm'],
            ['.75in'],
            ['1em 1em 1em 0 discard'],
            ['0pt 0pt 0pt 1 retain'],
            ['-1mm -1mm -1mm 2 discard'],
            ['1'],                          // precedence 1, 0pt. Is this valid?
            ['1em 1em 1em 1'],
            ['1em 1'],
            ['1em 1em'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['normal 1em'],                   // multiple values
            ['inherit 0pt'],                  // mixed keyword and value
            ['1.'],                           // trailing dot
            ['1,5em'],                        // comma instead of dot
            ['%'],                            // not allowed percentage
            ['1em 1em 1em maybe'],            // missing/invalid precedence and conditionality
            ['1em 1em 1em 0 maybe'],          // invalid conditionality
            ['1em 1em 1em force force'],      // too many tokens
            [''],                             // empty string
            [null],                           // null value
            [true],                           // boolean
            [false],
            [[]],                             // array
            [new \stdClass()],                // object
        ];
    }
}
