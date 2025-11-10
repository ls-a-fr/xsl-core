<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

use Lsa\Xsl\Core\Exceptions\InvalidAttributeValueParseException;

final class ProportionalColumnWidthFunctionDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['proportional-column-width(2)', 'proportional-column-width(2)'],
            ['proportional-column-width(    2    )', 'proportional-column-width(2)'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['proportional-column-width(1.25pt)', '', InvalidAttributeValueParseException::class], // must be of unit power zero
            ['proportional-column-width(1.5)', '', InvalidAttributeValueParseException::class], // must be unsigned integer
            ['proportional-column-width(-1)', '', InvalidAttributeValueParseException::class], // must be unsigned integer
            ['proportional-column-widt(3)', '', InvalidAttributeValueParseException::class],         // typo
            ['PROPORTIONAL-COLUMN-WIDTH(3)', '', InvalidAttributeValueParseException::class],        // case-sensitive
            ['proportional-column-width()', '', InvalidAttributeValueParseException::class],        // invalid number of arguments
            ['proportional-column-width(2)', 'proportional-column-width(3)', null],         // false result
            ['proportional-column-width(test)', '', InvalidAttributeValueParseException::class],      // should contain numeric
            ['proportional-column-width(1.)', '', InvalidAttributeValueParseException::class],         // invalid float
        ];
    }
}
