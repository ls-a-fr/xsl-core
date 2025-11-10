<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class RegionNameDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['xsl-region-body'],
            ['xsl-region-start'],
            ['xsl-region-end'],
            ['xsl-region-before'],
            ['xsl-region-after'],
            ['region1'],
            ['mainContent'],
            ['_customRegion'],
            ['region-123'],
            ['régionUnicode'],
            ['section.sub'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['xsl region body'],       // spaces not allowed
            ['xsl:region:body'],       // colon not allowed in <name>
            ['123start'],              // starts with digit
            ['region@name'],           // invalid character
            ['xsl-region'],            // incomplete keyword
            [''],                      // empty string
            [null],                    // null value
            [true],                    // boolean
            [false],
            [[]],                      // array
            [new \stdClass()],         // object
        ];
    }
}
