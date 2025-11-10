<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

use Lsa\Arithmetic\Ast\Exceptions\InvalidFunctionTokenException;
use Lsa\Xsl\Core\Exceptions\InvalidAttributeValueParseException;

final class AbsFunctionDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['abs(-2)', '2'],
            ['abs(-1.5)', '1.5'],
            ['abs(-1.9999999)', '1.9999999'],
            ['abs(0)', '0'],
            ['abs(2)', '2'],
            ['abs(1999999)', '1999999'],
            ['abs(    1.25     )', '1.25'],
            ['abs(-1.25pt)', '1.25pt'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['as(-2)', '2', InvalidAttributeValueParseException::class],         // typo
            ['ABS(-2)', '2', InvalidAttributeValueParseException::class],        // case-sensitive
            ['abs(0)', '2', null],         // false result
            ['abs(test)', '0', InvalidFunctionTokenException::class],      // should contain numeric
            ['abs(1.)', '1', InvalidFunctionTokenException::class],         // invalid float
        ];
    }
}
