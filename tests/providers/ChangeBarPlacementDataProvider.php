<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class ChangeBarPlacementDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['start'],
            ['end'],
            ['left'],
            ['right'],
            ['inside'],
            ['outside'],
            ['alternate'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Start'],             // case-sensitive
            ['end start'],         // multiple values
            ['left_right'],        // underscore not allowed
            ['alternate-'],        // invalid character
            [' alternate'],        // leading space
            ['right '],            // trailing space
            [''],                  // empty string
            [null],                // null value
            [true],                // boolean
            [false],
            [[]],                  // array
            [new \stdClass()],     // object
        ];
    }
}
