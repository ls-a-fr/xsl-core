<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

use Lsa\Xsl\Core\Exceptions\InvalidAttributeValueParseException;

final class FromNearestSpecifiedValueFunctionDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['from-nearest-specified-value(font-size)', 'from-nearest-specified-value(font-size)'],
            ['from-nearest-specified-value(    font-size    )', 'from-nearest-specified-value(font-size)'],
            ['from-nearest-specified-value()', 'from-nearest-specified-value()'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['from-nearest-specified-value(invalid-property)', '', InvalidAttributeValueParseException::class], // must be a valid property
            ['from-nearest-specified-value(3)', '', InvalidAttributeValueParseException::class],         // must be a valid property
            ['from-nearest-specified-valu(font-size)', '', InvalidAttributeValueParseException::class],         // typo
            ['FROM-NEAREST-SPECIFIED-VALUE()', 'from-nearest-specified-value()', null],        // case-sensitive
            ['from-nearest-specified-value(color, font-size)', '', InvalidAttributeValueParseException::class],        // invalid number of arguments
            ['from-nearest-specified-value()', '12pt', null],         // false result
        ];
    }
}
