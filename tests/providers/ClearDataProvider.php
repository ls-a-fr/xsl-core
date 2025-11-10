<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class ClearDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['start'],
            ['end'],
            ['left'],
            ['right'],
            ['inside'],
            ['outside'],
            ['both'],
            ['none'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Start'],               // case-sensitive
            ['left right'],          // multiple values
            ['inside-outside'],      // invalid combination
            ['start none'],          // multiple keywords
            ['boths'],               // malformed keyword
            [''],                    // empty string
            [null],                  // null value
            [true],                  // boolean
            [false],
            [[]],                    // array
            [new \stdClass()],       // object
        ];
    }
}
