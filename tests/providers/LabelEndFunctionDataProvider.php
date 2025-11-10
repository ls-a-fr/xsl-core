<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

use Lsa\Arithmetic\Ast\Exceptions\InvalidFunctionTokenException;

final class LabelEndFunctionDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['label-end()', 'label-end()'],
            ['label-end(   )', 'label-end()'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['label-end(1)', '', InvalidFunctionTokenException::class],
        ];
    }
}
