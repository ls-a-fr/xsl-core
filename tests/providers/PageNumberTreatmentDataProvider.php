<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class PageNumberTreatmentDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['link'],
            ['no-link'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Link'],             // case-sensitive
            ['no_link'],          // underscore not allowed
            ['link no-link'],     // multiple values
            ['no-link '],         // trailing space
            [' link'],            // leading space
            ['nolink'],           // missing hyphen
            [''],                 // empty string
            [null],               // null value
            [true],               // boolean
            [false],
            [[]],                 // array
            [new \stdClass()],    // object
        ];
    }
}
