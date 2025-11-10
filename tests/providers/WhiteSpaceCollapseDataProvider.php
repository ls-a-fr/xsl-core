<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class WhiteSpaceCollapseDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['false'],
            ['true'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['False'],               // case-sensitive
            [' true'],               // leading space
            ['false '],              // trailing space
            ['true false'],          // multiple keywords
            ['inherit true'],        // multiple keywords
            ['yes'],                 // invalid keyword
            ['no'],                  // invalid keyword
            ['1'],                   // numeric not allowed
            ['0'],                   // numeric not allowed
            [''],                    // empty string
            [null],                  // null value
            [true],                  // native boolean
            [false],
            [[]],                    // array
            [new \stdClass()],       // object
        ];
    }
}
