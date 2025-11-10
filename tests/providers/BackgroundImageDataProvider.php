<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class BackgroundImageDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['url(http://example.com/image.png)'],
            ['url("http://example.com/image.png")'],
            ['url(\'http://example.com/image.png\')'],
            ['url(https://example.org/resource.svg)'],
            ['url(  http://example.com/resource  )'],
            ['none'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['url(http://example.com'],             // missing closing parenthesis
            ['url"http://example.com")'],           // malformed syntax
            ['url("http://example.com\')'],         // mismatched quotes
            ['url()'],                              // empty URL
            ['url("") extra'],                      // extraneous token
            ['url(http://example.com) none'],       // multiple values
            ['inherit url(http://example.com)'],    // mixed keyword and uri
            ['none inherit'],                       // multiple keywords
            [''],                                   // empty string
            [null],                                 // null value
            [true],                                 // boolean
            [false],
            [[]],                                   // array
            [new \stdClass()],                      // object
        ];
    }
}
