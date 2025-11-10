<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

use Lsa\Xsl\Core\Exceptions\InvalidAttributeValueParseException;
use Lsa\Xsl\Core\Validation\Properties\BackgroundColor;
use Lsa\Xsl\Core\Validation\Properties\Color;
use Lsa\Xsl\Core\Validation\Properties\FontSize;
use Lsa\Xsl\Core\Validation\Properties\Margin;
use Lsa\Xsl\Core\Validation\Properties\MarginTop;

final class InheritablePropertyValueFunctionDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            [new BackgroundColor(), 'inherited-property-value(color)', 'red'],
            [new MarginTop(), 'inherited-property-value(font-size)', '12pt'],
            [new BackgroundColor(), 'inherited-property-value(    color    )', 'red'],
            [new FontSize(), 'inherited-property-value()', '12pt'],
            [new Color(), 'inherited-property-value()', 'red'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            [new FontSize(), 'inherited-property-value(invalid-property)', '', InvalidAttributeValueParseException::class], // must be a valid property
            [new FontSize(), 'inherited-property-value(3)', '', InvalidAttributeValueParseException::class],         // must be a valid property
            [new Margin(), 'from-table-colum(margin)', '', InvalidAttributeValueParseException::class],         // typo
            [new FontSize(), 'FROM-TABLE-COLUMN()', 'inherited-property-value()', null],        // case-sensitive
            [new FontSize(), 'inherited-property-value(color, font-size)', '', InvalidAttributeValueParseException::class],        // invalid number of arguments
            [new Color(), 'inherited-property-value()', 'blue', null],         // false result
        ];
    }
}
