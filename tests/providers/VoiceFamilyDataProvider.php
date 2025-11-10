<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class VoiceFamilyDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['male'],
            ['female'],
            ['child'],
            ['romeo'],
            ['juliet'],
            ['announcer'],
            ['carlos, male'],
            ['comedian, female'],
            ['"Trinoids", male'],
            ['"John Doe", child'],
            ['carlos, female, "Trinoids", child'],
            ['"John Doe", male, "Trinoids", child'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['child,'],                   // trailing comma
            [',female'],                  // leading comma
            ['male female'],              // missing comma
            ['"Unclosed quote'],           // unclosed quoted string
            ['"Mismatched\''],            // mismatched quotes
            ['male, inherit'],            // mixed keyword and list
            ['male, carlos,'],            // trailing comma
            ['carlos,, male'],            // double comma
            [''],                         // empty string
            [null],                       // null value
            [true],                       // boolean
            [false],
            [[]],                         // array
            [new \stdClass()],            // object
        ];
    }
}
