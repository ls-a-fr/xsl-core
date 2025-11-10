<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

use Lsa\Xsl\Core\Exceptions\InvalidAttributeValueParseException;
use Lsa\Xsl\Core\Validation\Properties\Clear;
use Lsa\Xsl\Core\Validation\Properties\FontSize;
use Lsa\Xsl\Core\Validation\Properties\MarginTop;

final class FromParentFunctionDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            [new MarginTop(), 'from-parent(margin-top)', 'from-parent(margin-top)'],
            [new Clear(), 'from-parent(clear)', 'from-parent(clear)'],
            [new MarginTop(), 'from-parent(    margin-top    )', 'from-parent(margin-top)'],
            [new Clear(), 'from-parent()', 'from-parent()'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            [new Clear(), 'from-parent(invalid-property)', '', InvalidAttributeValueParseException::class], // must be a valid property
            [new Clear(), 'from-parent(3)', '', InvalidAttributeValueParseException::class],         // must be a valid property
            [new FontSize(), 'from-paren(font-size)', '', InvalidAttributeValueParseException::class],         // typo
            [new Clear(), 'FROM-PARENT()', 'from-parent()', null],        // case-sensitive
            [new FontSize(), 'from-parent(color, font-size)', '', InvalidAttributeValueParseException::class],        // invalid number of arguments
            [new Clear(), 'from-parent()', '12pt', null],         // false result
        ];
    }
}
