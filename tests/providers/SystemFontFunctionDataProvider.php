<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

use Lsa\Arithmetic\Ast\Exceptions\InvalidFunctionTokenException;

final class SystemFontFunctionDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['system-font(heading)', 'system-font(heading)'],
            ['system-font(heading, font-size)', 'system-font(heading,font-size)'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['system-font()', '', InvalidFunctionTokenException::class],
            ['system-font(heading, invalid-property)', '', InvalidFunctionTokenException::class],
            ['system-font(heading)', 'system-font(subheading)', null],         // invalid result
            ['system-font(heading, font-size)', 'system-font(subheading, font-size)', null],         // invalid result
        ];
    }
}
