<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

use Lsa\Arithmetic\Ast\Exceptions\InvalidFunctionTokenException;
use Lsa\Xsl\Core\Exceptions\InvalidAttributeValueParseException;

final class MinFunctionDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['min(2, 3)', '2'],
            ['min(1.5, 2)', '1.5'],
            ['min(-1.9999999, -1.9999998)', '-1.9999999'],
            ['min(1.9999999, 1.9999998)', '1.9999998'],
            ['min(    1.25,    2.5    )', '1.25'],
            ['min(-1.25pt, -1.5pt)', '-1.5pt'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['mi(-2, 3)', '', InvalidAttributeValueParseException::class],         // typo
            ['MIN(-2, 3)', '', InvalidAttributeValueParseException::class],        // case-sensitive
            ['min(1)', '', InvalidFunctionTokenException::class],        // invalid number of arguments
            ['min(2, 3)', '3', null],         // false result
            ['min(test)', '', InvalidFunctionTokenException::class],      // should contain numeric
            ['min(1.)', '', InvalidFunctionTokenException::class],         // invalid float
        ];
    }
}
