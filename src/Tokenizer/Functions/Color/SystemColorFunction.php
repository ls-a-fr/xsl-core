<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tokenizer\Functions\Color;

use Lsa\Xsl\Core\Tokenizer\Functions\XslFunction;

/**
 * The system-color function returns a system defined color with a given name.
 *
 * Signature:
 * - `color system-color(NCName)`
 */
class SystemColorFunction extends XslFunction
{
    public static function getFunctionName(): string
    {
        return 'system-color';
    }

    public static function getParameters(): array
    {
        return [
            [self::MODE_REQUIRED => self::TYPE_NC_NAME],
        ];
    }

    public function evaluate(...$args): string|float
    {
        return 'system-color('.$args[0].')';
    }
}
