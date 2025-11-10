<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tokenizer\Providers;

use Lsa\Arithmetic\Ast\Functions\Function_;
use Lsa\Arithmetic\Ast\Providers\FunctionProvider;
use Lsa\Xsl\Core\Tokenizer\Functions\Property\FromNearestSpecifiedValueFunction;
use Lsa\Xsl\Core\Tokenizer\Functions\Property\FromPageMasterRegionFunction;
use Lsa\Xsl\Core\Tokenizer\Functions\Property\FromParentFunction;
use Lsa\Xsl\Core\Tokenizer\Functions\Property\FromTableColumnFunction;
use Lsa\Xsl\Core\Tokenizer\Functions\Property\InheritedPropertyValueFunction;
use Lsa\Xsl\Core\Tokenizer\Functions\Property\MergePropertyValuesFunction;
use Lsa\Xsl\Core\Tokenizer\Functions\XslFunction;

/**
 * Every property-related function.
 */
class PropertyFunctionProvider
{
    /**
     * Function registered in this provider
     *
     * @var list<class-string<Function_>>
     */
    private static $list = [
        FromNearestSpecifiedValueFunction::class,
        FromPageMasterRegionFunction::class,
        FromParentFunction::class,
        FromTableColumnFunction::class,
        InheritedPropertyValueFunction::class,
        MergePropertyValuesFunction::class,
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
        return XslFunction::TYPE_OBJECT;
    }
}
