<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

use Lsa\Xsl\Core\Exceptions\InvalidAttributeValueParseException;
use Lsa\Xsl\Core\Validation\Properties\FontSize;

final class MergePropertyValuesFunctionDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            [new FontSize(), 'merge-property-values(line-height)', 'merge-property-values(line-height)'],
            [new FontSize(), 'merge-property-values(    line-height    )', 'merge-property-values(line-height)'],
            [new FontSize(), 'merge-property-values()', 'merge-property-values()'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            [new FontSize(), 'merge-property-values(invalid-property)', '', InvalidAttributeValueParseException::class], // must be a valid property
            [new FontSize(), 'merge-property-values(3)', '', InvalidAttributeValueParseException::class],         // must be a valid property
            [new FontSize(), 'merge-property-value(margin)', '', InvalidAttributeValueParseException::class],         // typo
            [new FontSize(), 'MERGE-PROPERTY-VALUES()', 'merge-property-values()', null],        // case-sensitive
            [new FontSize(), 'merge-property-values(color, font-size)', '', InvalidAttributeValueParseException::class],        // invalid number of arguments
            [new FontSize(), 'merge-property-values()', 'blue', null],         // false result
        ];
    }
}
