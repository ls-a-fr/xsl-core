<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class RoleDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['simpleString'],
            ['another-string_123'],
            ['unicode_äöü_测试'],
            ['validName123'],
            ['name.with.dots'],
            ['name-with-hyphens'],
            ['_leadingUnderscore'],
            ['url(http://example.com/image.png)'],
            ['url("http://example.com/image.png")'],
            ['url(\'http://example.com/image.png\')'],
            ['none'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['"quotedString"'],                          // quotes not allowed in <string>
            ["'quotedString'"],
            ['string with space'],                       // whitespace disallowed in NCName
            ['name:withColon'],                          // colon not allowed
            [''],                                        // empty string
            ['url(http://example.com'],                  // missing closing parenthesis
            ['url"http://example.com")'],                // malformed url
            ['url("http://example.com\')'],              // mismatched quotes
            ['none inherit'],                            // multiple keywords
            ['inherit url("http://example.com")'],       // mixed keyword and uri
            ['simpleString url(http://example.com)'],    // multiple values
            [null],                                      // null value
            [true],                                      // boolean
            [false],
            [[]],                                        // array
            [new \stdClass()],                           // object
        ];
    }
}
