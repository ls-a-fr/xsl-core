<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class FloatDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['before'],
            ['start'],
            ['end'],
            ['left'],
            ['right'],
            ['inside'],
            ['outside'],
            ['none'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Before'],               // case-sensitive
            ['left right'],           // multiple values
            ['start-end'],            // invalid combination
            ['inside outside'],       // multiple keywords
            ['none start'],           // multiple values
            [''],                     // empty string
            [null],                   // null value
            [true],                   // boolean
            [false],
            [[]],                     // array
            [new \stdClass()],        // object
        ];
    }
}
