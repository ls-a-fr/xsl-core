<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class ContentTypeDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['auto'],
            ['content-type:application/xml'],
            ['content-type:image/svg+xml'],
            ['namespace-prefix:svg'],
            ['namespace-prefix:foo'],
            ['namespace-prefix:_custom'],
            ['namespace-prefix:ns123'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['content-type:'],               // missing MIME type
            ['namespace-prefix:'],           // missing prefix
            ['content-type xml'],            // missing colon
            ['namespace_prefix:svg'],        // underscore instead of hyphen
            ['content:type:image/svg+xml'],  // extra colon
            ['"content-type:image/svg+xml"'], // quotes not allowed
            ['123prefix:svg'],               // prefix cannot start with digit
            ['namespace-prefix:svg extra'],  // extra data
            [''],                            // empty string
            [null],                          // null value
            [true],                          // boolean
            [false],
            [[]],                            // array
            [new \stdClass()],               // object
        ];
    }
}
