<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class TextAlignLastDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['relative'],
            ['start'],
            ['center'],
            ['end'],
            ['justify'],
            ['inside'],
            ['outside'],
            ['left'],
            ['right'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Relative'],              // case-sensitive
            [' start'],                // leading space
            ['end '],                  // trailing space
            ['left right'],            // multiple values
            ['justify inside'],        // multiple keywords
            ['centered'],              // invalid keyword
            ['inherit start'],         // multiple keywords
            [''],                      // empty string
            [null],                    // null value
            [true],                    // boolean
            [false],
            [[]],                      // array
            [new \stdClass()],         // object
        ];
    }
}
