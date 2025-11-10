<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tokenizer\Functions;

use Lsa\Arithmetic\Ast\Functions\Function_;

/**
 * XslFunctions are defined by specific types.
 */
abstract class XslFunction extends Function_
{
    public const TYPE_NUMERIC = 'numeric';

    public const TYPE_UNIT = 'unit';

    public const TYPE_NC_NAME = 'nc-name';

    public const TYPE_COLOR = 'color';

    public const TYPE_OBJECT = 'object';
}
