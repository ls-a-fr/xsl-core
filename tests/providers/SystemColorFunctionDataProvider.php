<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

use Lsa\Arithmetic\Ast\Exceptions\InvalidFunctionTokenException;

final class SystemColorFunctionDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['system-color(red)', 'system-color(red)'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['system-color()', '', InvalidFunctionTokenException::class],
            ['system-color(red)', 'system-color(blue)', null],         // invalid result
            ['system-color(red)', '', null],         // invalid result
        ];
    }
}
