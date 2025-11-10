<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class CueBeforeDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['url(http://example.com/image.png)'],
            ['url("http://example.com/image.png")'],
            ['url(\'http://example.com/image.png\')'],
            ['url(  http://example.com/resource  )'],
            ['url("https://example.org/resource.svg")'],
            ['none'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['url(http://example.com'],             // missing closing parenthesis
            ['url"http://example.com")'],           // invalid syntax
            ['url("http://example.com\')'],         // mismatched quotes
            ['url(http://example.com) none'],       // multiple values
            ['inherit url(http://example.com)'],    // mixed keyword and uri
            ['none inherit'],                       // multiple keywords
            ['url("") extra'],                      // extraneous token
            [''],                                   // empty string
            [null],                                 // null value
            [true],                                 // boolean
            [false],
            [[]],                                   // array
            [new \stdClass()],                      // object
        ];
    }
}
