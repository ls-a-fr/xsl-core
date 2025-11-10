<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tokenizer\Functions\Number;

use Lsa\Xsl\Core\Tokenizer\Functions\XslFunction;

/**
 * The body-start function returns the calculated body-start value for lists. See the definition in
 * 7.30.12 provisional-distance-between-starts.
 *
 * Signature:
 * - `numeric body-start()`
 *
 * @see https://www.w3.org/TR/xsl11/#provisional-distance-between-starts
 */
class BodyStartFunction extends XslFunction
{
    public static function getFunctionName(): string
    {
        return 'body-start';
    }

    public static function getParameters(): array
    {
        return [];
    }

    public function evaluate(...$args): string|float
    {
        return 'body-start()';
    }
}
