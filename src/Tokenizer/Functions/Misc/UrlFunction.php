<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tokenizer\Functions\Misc;

use Lsa\Arithmetic\Ast\Exceptions\InvalidFunctionTokenException;
use Lsa\Xsl\Core\Exceptions\InvalidAttributeValueParseException;
use Lsa\Xsl\Core\Tokenizer\Functions\XslFunction;
use Lsa\Xsl\Core\Validation\Types\Xsl\UriSpecificationType;

/**
 * The url function is not a real function, just returns the value.
 *
 * Signature:
 * - `string url(striong)`
 */
class UrlFunction extends XslFunction
{
    public static function getFunctionName(): string
    {
        return 'url';
    }

    /**
     * Gets this function parameters
     *
     * @return list<array<self::MODE_*,self::TYPE_*>>
     */
    public static function getParameters(): array
    {
        return [
            [self::MODE_REQUIRED => self::TYPE_STRING],
        ];
    }

    public function evaluate(...$args): string|float
    {
        if (\is_float($args[0]) === true) {
            throw new InvalidAttributeValueParseException(
                self::getFunctionName().'() expects string, float given'
            );
        }
        // Remove spaces if necessary
        $quotedUrl = \trim($args[0]);
        // Remove quotes for parse_url
        $unquotedUrl = \trim($quotedUrl, "'\"");

        // Build URL with encoding
        $parts = parse_url($unquotedUrl);
        $encodedPath = implode('/', array_map('rawurlencode', explode('/', ($parts['path'] ?? ''))));
        $query = '';
        if (isset($parts['query']) === true) {
            $query = '?'.$parts['query'];
        }
        $encodedUrl = ($parts['scheme'] ?? '').'://'.($parts['host'] ?? '').$encodedPath.$query;
        // Build function call
        $sanitized = self::getFunctionName().'("'.$encodedUrl.'")';

        if ((new UriSpecificationType())->validate($sanitized) === false) {
            throw new InvalidFunctionTokenException('URI specified to url function is invalid: '.$unquotedUrl);
        }

        return self::getFunctionName().'('.$quotedUrl.')';
    }
}
