<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tokenizer\Operands;

use Lsa\Arithmetic\Ast\Operands\DivideOperand as BaseDivideOperand;

/**
 * Modulus operand in XSL-FO is done with the "div" keyword.
 */
final class DivideOperand extends BaseDivideOperand
{
    public static function getOperator(): string
    {
        return 'div';
    }
}
