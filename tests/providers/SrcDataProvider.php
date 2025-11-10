<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class SrcDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['url(http://example.com/image.png)'],
            ['url(\'http://example.com/image.png\')'],
            ['url(  http://example.com/resource  )'],
            ['url("https://example.org/resource.svg")'],
            ['url("https://example.com/image.png")'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['url(example.com)'],                    // missing scheme
            ['url(\'/path/to/resource\')'],          // missing scheme and ihier-part
            ['url( "file.svg" )'],                   // missing scheme and ihier-part
            ['url()'],                               // empty URL
            ['url(example.com'],                     // missing closing parenthesis
            ['urlexample.com)'],                     // missing opening parenthesis
            ['url("example.com\')'],                 // mismatched quotes
            ['url("example.com") extra'],            // extra content
            ['url(example.com\')'],                   // mismatched closing quote
            ['url(example.com"].png")'],             // invalid nesting
            ['"url(example.com)"'],                  // quoted wrapper
            ['inherit url(example.com)'],            // multiple values
            [''],                                    // empty string
            [null],                                  // null value
            [true],                                  // boolean
            [false],
            [[]],                                    // array
            [new \stdClass()],                       // object
        ];
    }
}
