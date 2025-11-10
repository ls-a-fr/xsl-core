<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

use Lsa\Arithmetic\Ast\Exceptions\InvalidFunctionTokenException;
use Lsa\Xsl\Core\Exceptions\InvalidAttributeValueParseException;

final class RoundFunctionDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['round(-2)', '-2'],
            ['round(-1.5)', '-1'],
            ['round(-1.9999999)', '-2'],
            ['round(0)', '0'],
            ['round(2.3)', '2'],
            ['round(1999999)', '1999999'],
            ['round(    1.25     )', '1'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['round(-1.25pt)', '', InvalidFunctionTokenException::class], // zero unit power mandatory
            ['roun(-2)', '', InvalidAttributeValueParseException::class],         // typo
            ['ROUND(-2)', '', InvalidAttributeValueParseException::class],        // case-sensitive
            ['round(0)', '2', null],         // false result
            ['round(test)', '', InvalidFunctionTokenException::class],      // should contain numeric
            ['round(1.)', '1', InvalidFunctionTokenException::class],         // invalid float
        ];
    }
}
