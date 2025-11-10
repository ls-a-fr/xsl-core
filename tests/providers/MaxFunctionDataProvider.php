<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

use Lsa\Arithmetic\Ast\Exceptions\InvalidFunctionTokenException;
use Lsa\Xsl\Core\Exceptions\InvalidAttributeValueParseException;

final class MaxFunctionDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['max(2, 3)', '3'],
            ['max(1.5, 2)', '2'],
            ['max(-1.9999999, -1.9999998)', '-1.9999998'],
            ['max(1.9999999, 1.9999998)', '1.9999999'],
            ['max(    1.25,    2.5    )', '2.5'],
            ['max(-1.25pt, -1.5pt)', '-1.25pt'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['ma(-2, 3)', '', InvalidAttributeValueParseException::class],         // typo
            ['MAX(-2, 3)', '', InvalidAttributeValueParseException::class],        // case-sensitive
            ['max(1)', '', InvalidFunctionTokenException::class],        // invalid number of arguments
            ['max(2, 3)', '2', null],         // false result
            ['max(test)', '', InvalidFunctionTokenException::class],      // should contain numeric
            ['max(1.)', '', InvalidFunctionTokenException::class],         // invalid float
        ];
    }
}
