<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class AlignmentBaselineDataProvider
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
            ['1'],                               // invalid value
            ['1.'],                              // invalid value
            ['1,5em'],                           // invalid value
            ['%'],                               // invalid value
            ['auto 0%'],                         // invalid value
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
