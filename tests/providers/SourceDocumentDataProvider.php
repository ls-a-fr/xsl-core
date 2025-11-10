<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class SourceDocumentDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['url(http://example.com/image.png)'],
            ['url("http://example.com/image.png")'],
            ['url(\'http://example.com/image.png\')'],
            ['url(  http://example.com/image.png  )'],
            ['url(  "http://example.com/image.png"  )'],
            ['url("http://example.com") url("http://example.org")'],
            ['url(http://a) url(http://b) url(http://c)'],
            ['none'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['url(http://example.com'],                  // missing closing parenthesis
            ['url"http://example.com")'],                // incorrect quote placement
            ['url(\'http://example.com")'],              // mismatched quotes
            ['url(http://example.com")'],                // missing opening quote
            ['url("http://example.com\')'],              // mismatched quotes
            ['url("http://example.com") url("http://example.org") url("http://example.net") extra'], // extra invalid token
            ['url(http://example.com) none'],            // mixed uri and keyword
            ['inherit url(http://example.com)'],         // mixed keyword and uri
            ['none inherit'],                            // multiple keywords
            [''],                                        // empty string
            [null],                                      // null value
            [true],                                      // boolean
            [false],
            [[]],                                        // array
            [new \stdClass()],                           // object
        ];
    }
}
