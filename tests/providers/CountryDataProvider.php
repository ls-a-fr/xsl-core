<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class CountryDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['none'],
            ['US'],         // ISO 3166-1 alpha-2
            ['FR'],         // ISO 3166-1 alpha-2
            ['DE'],         // ISO 3166-1 alpha-2
            ['JP'],         // ISO 3166-1 alpha-2
            ['GB'],         // ISO 3166-1 alpha-2
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['us'],                // lowercase
            ['fr'],                // lowercase
            ['USA'],               // ISO 3166-1 alpha-3
            ['FRA'],               // ISO 3166-1 alpha-3
            ['DEU'],               // ISO 3166-1 alpha-3
            ['JPN'],               // ISO 3166-1 alpha-3
            ['GBR'],               // ISO 3166-1 alpha-3
            ['U'],                 // too short
            ['US1'],               // contains digit
            ['U-SA'],              // contains invalid character
            ['UNITEDSTATES'],      // too long
            ['none US'],           // multiple values
            ['inherit FR'],        // multiple values
            [''],                  // empty string
            [null],                // null value
            [true],                // boolean
            [false],
            [[]],                  // array
            [new \stdClass()],     // object
        ];
    }
}
