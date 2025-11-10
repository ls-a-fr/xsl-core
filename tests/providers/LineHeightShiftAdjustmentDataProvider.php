<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class LineHeightShiftAdjustmentDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['consider-shifts'],
            ['disregard-shifts'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Consider-Shifts'],             // case-sensitive
            ['disregard shifts'],            // missing hyphen
            ['consider-shift'],              // misspelled keyword
            ['consider-shifts disregard-shifts'], // multiple keywords
            ['inherit consider-shifts'],     // multiple keywords
            [''],                            // empty string
            [null],                          // null value
            [true],                          // boolean
            [false],
            [[]],                            // array
            [new \stdClass()],               // object
        ];
    }
}
