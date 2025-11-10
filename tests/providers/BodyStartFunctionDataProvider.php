<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

use Lsa\Arithmetic\Ast\Exceptions\InvalidFunctionTokenException;

final class BodyStartFunctionDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['body-start()', 'body-start()'],
            ['body-start(   )', 'body-start()'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['body-start(1)', '', InvalidFunctionTokenException::class],
        ];
    }
}
