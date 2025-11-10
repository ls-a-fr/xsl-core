<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

use Lsa\Arithmetic\Ast\Exceptions\InvalidFunctionTokenException;
use Lsa\Xsl\Core\Exceptions\InvalidAttributeValueParseException;

final class CeilingFunctionDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['ceiling(-2)', '-2'],
            ['ceiling(-1.5)', '-1'],
            ['ceiling(-1.9999999)', '-1'],
            ['ceiling(0)', '0'],
            ['ceiling(2)', '2'],
            ['ceiling(1999999)', '1999999'],
            ['ceiling(    1.25     )', '2'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['ceiling(-1.25pt)', '', InvalidFunctionTokenException::class], // must be of unit power zero
            ['ceilin(-2)', '-2', InvalidAttributeValueParseException::class],         // typo
            ['CEILING(-2)', '-2', InvalidAttributeValueParseException::class],        // case-sensitive
            ['ceiling(0)', '2', null],         // false result
            ['ceiling(test)', '0', InvalidFunctionTokenException::class],      // should contain numeric
            ['ceiling(1.)', '1', InvalidFunctionTokenException::class],         // invalid float
        ];
    }
}
