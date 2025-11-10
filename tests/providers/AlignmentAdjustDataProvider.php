<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class AlignmentAdjustDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['auto'],
            ['baseline'],
            ['before-edge'],
            ['text-before-edge'],
            ['middle'],
            ['central'],
            ['after-edge'],
            ['text-after-edge'],
            ['ideographic'],
            ['alphabetic'],
            ['hanging'],
            ['mathematical'],
            ['0%'],
            ['100%'],
            ['-50%'],
            ['+25%'],
            ['0px'],
            ['1.5em'],
            ['-2pt'],
            ['+3mm'],
            ['.75in'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['BaseLine'],                        // case-sensitive
            ['before edge'],                     // missing hyphen
            ['text-beforeedge'],                 // malformed keyword
            ['middle baseline'],                 // multiple keywords
            ['1'],                               // missing unit
            ['1.'],                              // trailing dot
            ['1,5em'],                           // comma instead of dot
            ['%'],                               // missing number
            ['auto 0%'],                         // multiple values
            ['inherit baseline'],                // multiple keywords
            [''],                                // empty string
            [null],                              // null value
            [true],                              // boolean
            [false],
            [[]],                                // array
            [new \stdClass()],                   // object
        ];
    }
}
