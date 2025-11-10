<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class BorderCollapseDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['collapse'],
            ['collapse-with-precedence'],
            ['separate'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Collapse'],                       // case-sensitive
            ['collapse_with_precedence'],       // underscore not allowed
            ['collapse with precedence'],       // space instead of hyphen
            ['collapse separate'],              // multiple values
            ['separate '],                      // trailing space
            [' inherit'],                       // leading space
            [''],                               // empty string
            [null],                             // null value
            [true],                             // boolean
            [false],
            [[]],                               // array
            [new \stdClass()],                  // object
        ];
    }
}
