<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class LineStackingStrategyDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['line-height'],
            ['font-height'],
            ['max-height'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Line-Height'],                  // case-sensitive
            ['font height'],                 // missing hyphen
            ['maxheight'],                   // malformed keyword
            ['line-height font-height'],     // multiple keywords
            ['inherit max-height'],          // multiple keywords
            [''],                            // empty string
            [null],                          // null value
            [true],                          // boolean
            [false],
            [[]],                            // array
            [new \stdClass()],               // object
        ];
    }
}
