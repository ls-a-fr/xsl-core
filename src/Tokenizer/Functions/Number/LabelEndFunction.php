<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tokenizer\Functions\Number;

use Lsa\Xsl\Core\Tokenizer\Functions\XslFunction;

/**
 * The label-end function returns the calculated label-end value for lists. See the definition in
 * 7.30.11 provisional-label-separation.
 *
 * Signature:
 * - `numeric label-end()`
 *
 * @see https://www.w3.org/TR/xsl11/#provisional-label-separation
 */
class LabelEndFunction extends XslFunction
{
    public static function getFunctionName(): string
    {
        return 'label-end';
    }

    /**
     * Gets this function parameters
     *
     * @return list<array<self::MODE_*,self::TYPE_*>>
     */
    public static function getParameters(): array
    {
        return [];
    }

    public function evaluate(...$args): string|float
    {
        return 'label-end()';
    }
}
