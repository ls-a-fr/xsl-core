<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class FontStyleDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['normal'],
            ['italic'],
            ['oblique'],
            ['backslant'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Normal'],              // case-sensitive
            [' italic'],             // leading space
            ['oblique '],            // trailing space
            ['italic oblique'],      // multiple keywords
            ['obliqu'],              // misspelled keyword
            ['inherit normal'],      // multiple keywords
            [''],                    // empty string
            [null],                  // null value
            [true],                  // boolean
            [false],
            [[]],                    // array
            [new \stdClass()],       // object
        ];
    }
}
