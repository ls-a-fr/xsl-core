<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class PlayDuringDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['url(http://example.com/image.png)'],
            ['url("http://example.com/image.png")'],
            ['url(\'http://example.com/image.png\')'],
            ['url(http://example.com) mix'],
            ['url(http://example.com) repeat'],
            ['auto'],
            ['none'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['url(http://example.com) mix mix'],       // repeated keyword
            ['mix url(http://example.com)'],           // wrong order
            ['url(http://example.com) auto'],          // mixing keyword and uri-spec
            ['url()'],                                 // empty URL
            ['url(http://example.com'],                // missing closing parenthesis
            ['url("http://example.com\')'],            // mismatched quotes
            ['url(http://example.com) mix auto'],      // too many values
            ['inherit auto'],                          // multiple keywords
            [''],                                      // empty string
            [null],                                    // null value
            [true],                                    // boolean
            [false],
            [[]],                                      // array
            [new \stdClass()],                         // object
        ];
    }
}
