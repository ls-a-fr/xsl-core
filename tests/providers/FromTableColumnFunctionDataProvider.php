<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

use Lsa\Xsl\Core\Exceptions\InvalidAttributeValueParseException;
use Lsa\Xsl\Core\Validation\Properties\FontSize;
use Lsa\Xsl\Core\Validation\Properties\MarginTop;

final class FromTableColumnFunctionDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            [new MarginTop(), 'from-table-column(font-size)', '14pt'],
            [new FontSize(), 'from-table-column(margin-top)', '0.75cm'],
            [new FontSize(), 'from-table-column(    margin-top    )', '0.75cm'],
            [new FontSize(), 'from-table-column()', '14pt'],
            [new MarginTop(), 'from-table-column()', '0.75cm'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            [new FontSize(), 'from-table-column(invalid-property)', '', InvalidAttributeValueParseException::class], // must be a valid property
            [new FontSize(), 'from-table-column(3)', '', InvalidAttributeValueParseException::class],         // must be a valid property
            [new FontSize(), 'from-table-colum(font-size)', '', InvalidAttributeValueParseException::class],         // typo
            [new FontSize(), 'FROM-TABLE-COLUMN()', 'from-table-column()', null],        // case-sensitive
            [new FontSize(), 'from-table-column(color, font-size)', '', InvalidAttributeValueParseException::class],        // invalid number of arguments
            [new MarginTop(), 'from-table-column()', '12pt', null],         // false result
        ];
    }
}
