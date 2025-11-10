<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

use Lsa\Arithmetic\Ast\Exceptions\InvalidFunctionTokenException;
use Lsa\Xsl\Core\Exceptions\InvalidAttributeValueParseException;

final class FloorFunctionDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['floor(-2)', '-2'],
            ['floor(-1.5)', '-2'],
            ['floor(-1.9999999)', '-2'],
            ['floor(0)', '0'],
            ['floor(2)', '2'],
            ['floor(1999999)', '1999999'],
            ['floor(    1.25     )', '1'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['floor(-1.25pt)', '', InvalidFunctionTokenException::class], // must be of unit power zero
            ['floo(-2)', '-2', InvalidAttributeValueParseException::class],         // typo
            ['FLOOR(-2)', '-2', InvalidAttributeValueParseException::class],        // case-sensitive
            ['floor(0)', '2', null],         // false result
            ['floor(test)', '0', InvalidFunctionTokenException::class],      // should contain numeric
            ['floor(1.)', '1', InvalidFunctionTokenException::class],         // invalid float
        ];
    }
}
