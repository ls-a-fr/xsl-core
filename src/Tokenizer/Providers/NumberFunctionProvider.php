<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tokenizer\Providers;

use Lsa\Arithmetic\Ast\Functions\Function_;
use Lsa\Arithmetic\Ast\Providers\FunctionProvider;
use Lsa\Xsl\Core\Tokenizer\Functions\Number\AbsFunction;
use Lsa\Xsl\Core\Tokenizer\Functions\Number\BodyStartFunction;
use Lsa\Xsl\Core\Tokenizer\Functions\Number\CeilingFunction;
use Lsa\Xsl\Core\Tokenizer\Functions\Number\FloorFunction;
use Lsa\Xsl\Core\Tokenizer\Functions\Number\LabelEndFunction;
use Lsa\Xsl\Core\Tokenizer\Functions\Number\MaxFunction;
use Lsa\Xsl\Core\Tokenizer\Functions\Number\MinFunction;
use Lsa\Xsl\Core\Tokenizer\Functions\Number\ProportionalColumnWidthFunction;
use Lsa\Xsl\Core\Tokenizer\Functions\Number\RoundFunction;
use Lsa\Xsl\Core\Tokenizer\Functions\XslFunction;

/**
 * Every number-related function.
 */
class NumberFunctionProvider
{
    /**
     * Function registered in this provider
     *
     * @var list<class-string<Function_>>
     */
    private static $list = [
        AbsFunction::class,
        BodyStartFunction::class,
        CeilingFunction::class,
        FloorFunction::class,
        LabelEndFunction::class,
        MaxFunction::class,
        MinFunction::class,
        ProportionalColumnWidthFunction::class,
        RoundFunction::class,
    ];

    public static function load(): void
    {
        FunctionProvider::merge(self::$list);
    }

    /**
     * Returns every function registered in this provider
     *
     * @return list<class-string<Function_>>
     */
    public static function get(): array
    {
        return self::$list;
    }

    /**
     * Return type of all functions inside this provider.
     *
     * @return Function_::TYPE_*|XslFunction::TYPE_*
     */
    public static function getReturnType(): string
    {
        return XslFunction::TYPE_NUMERIC;
    }
}
