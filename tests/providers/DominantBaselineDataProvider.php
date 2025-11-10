<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class DominantBaselineDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['auto'],
            ['use-script'],
            ['no-change'],
            ['reset-size'],
            ['ideographic'],
            ['alphabetic'],
            ['hanging'],
            ['mathematical'],
            ['central'],
            ['middle'],
            ['text-after-edge'],
            ['text-before-edge'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Auto'],                      // case-sensitive
            ['use script'],               // missing hyphen
            ['nochange'],                 // malformed keyword
            ['reset-size middle'],        // multiple keywords
            ['ideographic alphabetic'],   // multiple values
            ['text-afteredge'],           // malformed keyword
            ['inherit auto'],             // multiple keywords
            [''],                         // empty string
            [null],                       // null value
            [true],                       // boolean
            [false],
            [[]],                         // array
            [new \stdClass()],            // object
        ];
    }
}
