<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class LeaderAlignmentDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['none'],
            ['reference-area'],
            ['page'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['None'],                    // case-sensitive
            ['referencearea'],           // missing hyphen
            ['reference_area'],          // invalid character
            ['page none'],               // multiple values
            [' inherit'],                // leading space
            ['page '],                   // trailing space
            [''],                        // empty string
            [null],                      // null value
            [true],                      // boolean
            [false],
            [[]],                        // array
            [new \stdClass()],           // object
        ];
    }
}
