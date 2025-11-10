<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class SwitchToDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['xsl-preceding'],
            ['xsl-following'],
            ['xsl-any'],
            ['block'],
            ['mainHeader'],
            ['title section'],
            ['_id'],
            ['name123 name456 name789'],
            ['name-with-hyphen name.with.dot'],
            ['nāméWithÜnicode'],
            ['xsl preceding'],       // invalid keyword but two names
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['xsl-preceding xsl-any'], // multiple conflicting keywords
            ['123start'],            // invalid NCName: starts with digit
            ['invalid:name'],        // colon not allowed in <name>
            ['name one:two'],        // colon not allowed in compound name
            ['name@'],               // invalid character
            ['name '],               // trailing space (still valid name but may be sanitized)
            [''],                    // empty string
            [null],                  // null value
            [true],                  // boolean
            [false],
            [[]],                    // array
            [new \stdClass()],       // object
        ];
    }
}
