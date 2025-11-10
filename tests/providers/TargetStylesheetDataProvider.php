<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class TargetStylesheetDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['use-normal-stylesheet'],
            ['url(http://example.com)'],
            ['url(https://example.org/resource)'],
            ['url("http://example.com/path")'],
            ["url('http://example.com/path')"],
            ['url(  "https://example.org/path%20with%20entities"  )'],
            ['url(ftp://ftp.example.com/resource)'],
            ['url(file:///C:/path/to/file)'],
            ['url("https://example.com/?query=param&another=val")'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['use_normal_stylesheet'],            // invalid character
            ['url()'],                            // empty url
            ['url(http://example.com'],           // missing closing parenthesis
            ['url"example.com"'],                 // invalid syntax
            ['url(example.com"]'],                // mismatched quotes
            ['url("example.com\')'],              // mismatched quote types
            ['url("example.com)'],                // unclosed quote
            ['url(example.com"'],                  // invalid quotes
            ['url("\')"'],                          // incomplete
            ['url('],                             // incomplete
            ['url()example'],                     // extraneous characters
            [''],                                 // empty string
            [null],                               // null value
            [true],                               // boolean
            [false],
            [[]],                                 // array
            [new \stdClass()],                    // object
        ];
    }
}
