<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class MediaUsageDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['auto'],
            ['paginate'],
            ['bounded-in-one-dimension'],
            ['unbounded'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Auto'],                             // case-sensitive
            ['paginate auto'],                    // multiple values
            ['boundedinonedimension'],            // missing hyphens
            ['bounded_in_one_dimension'],         // underscores not allowed
            ['unbounded '],                       // trailing space
            [' paginate'],                        // leading space
            [''],                                 // empty string
            [null],                               // null value
            [true],                               // boolean
            [false],
            [[]],                                 // array
            [new \stdClass()],                    // object
        ];
    }
}
