<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tokenizer\Providers;

use Lsa\Arithmetic\Ast\Functions\Function_;
use Lsa\Arithmetic\Ast\Providers\FunctionProvider;
use Lsa\Xsl\Core\Tokenizer\Functions\Color\RgbFunction;
use Lsa\Xsl\Core\Tokenizer\Functions\Color\RgbIccFunction;
use Lsa\Xsl\Core\Tokenizer\Functions\Color\SystemColorFunction;
use Lsa\Xsl\Core\Tokenizer\Functions\XslFunction;

/**
 * Every color-related function.
 */
class ColorFunctionProvider
{
    /**
     * Function registered in this provider
     *
     * @var list<class-string<Function_>>
     */
    private static $list = [
        RgbFunction::class,
        RgbIccFunction::class,
        SystemColorFunction::class,
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
        return XslFunction::TYPE_COLOR;
    }
}
