<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

use Lsa\Arithmetic\Ast\Exceptions\InvalidFunctionTokenException;
use Lsa\Xsl\Core\Exceptions\InvalidAttributeValueParseException;

final class UrlFunctionDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            // ['url(http://example.com)', 'url(http://example.com)'],
            // ['url(https://example.org/resource)', 'url(https://example.org/resource)'],
            // ['url("http://example.com/path")', 'url("http://example.com/path")'],
            // ["url('http://example.com/path')", "url('http://example.com/path')"],
            // ['url(  "https://example.org/path%20with%20spaces"  )', 'url("https://example.org/path%20with%20spaces")'],
            // ['url(ftp://ftp.example.com/resource)', 'url(ftp://ftp.example.com/resource)'],
            // ['url(file:///C:/path/to/file)', 'url(file:///C:/path/to/file)'],
            // ['url("https://example.com/?query=param&another=val")', 'url("https://example.com/?query=param&another=val")'],
            ['url(  "https://example.org/path with spaces"  )', 'url("https://example.org/path with spaces")'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['url( data:image/png;base64,iVBORw0KGgoAAAANSUhEUg...)', '', InvalidFunctionTokenException::class],
            ['url()', '', InvalidFunctionTokenException::class],                          // empty url
            ['url(http://example.com', '', InvalidAttributeValueParseException::class],         // missing closing parenthesis
            ['url("example.com\')', '', InvalidFunctionTokenException::class],            // mismatched quote types
            ['url("example.com)', '', InvalidFunctionTokenException::class],              // unclosed quote
            ['url(example.com")', '', InvalidFunctionTokenException::class],                // invalid quotes
            ['url("\')', '', InvalidFunctionTokenException::class],                        // incomplete
            ['url(', '', InvalidAttributeValueParseException::class],                           // incomplete
            ['url()example', '', InvalidAttributeValueParseException::class],                   // extraneous characters
            ['not-a-url', '', InvalidFunctionTokenException::class],                      // invalid format
        ];
    }
}
