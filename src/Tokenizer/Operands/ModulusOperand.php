<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tokenizer\Operands;

use Lsa\Arithmetic\Ast\Operands\ModulusOperand as BaseModulusOperand;

/**
 * Modulus operand in XSL-FO is done with the "mod" keyword.
 */
final class ModulusOperand extends BaseModulusOperand
{
    public static function getOperator(): string
    {
        return 'mod';
    }

    /**
     * Whether this operator should keep units.
     *
     * @param  string  $unit1  First unit
     * @param  string  $unit2  Second unit
     * @return bool True if this operator should keep unit, false otherwise.
     *
     * phpcs:disable Generic.CodeAnalysis.UnusedFunctionParameter.FoundInExtendedClassAfterLastUsed
     */
    public static function shouldKeepUnit(string $unit1, string $unit2): bool
    {
        return true;
    }
}
