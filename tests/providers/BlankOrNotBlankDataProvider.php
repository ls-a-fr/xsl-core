<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class BlankOrNotBlankDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['blank'],
            ['not-blank'],
            ['any'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Blank'],                 // case-sensitive
            ['not_blank'],             // underscore not allowed
            ['blank not-blank'],       // multiple values
            ['any '],                  // trailing space
            [' inherit'],              // leading space
            ['notblank'],              // missing hyphen
            [''],                      // empty string
            [null],                    // null value
            [true],                    // boolean
            [false],
            [[]],                      // array
            [new \stdClass()],         // object
        ];
    }
}
