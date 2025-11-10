<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

use Lsa\Xsl\Core\Exceptions\InvalidAttributeValueParseException;
use Lsa\Xsl\Core\Validation\Properties\ReferenceOrientation;
use Lsa\Xsl\Core\Validation\Properties\WritingMode;

final class FromMasterPageRegionFunctionDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            [new WritingMode(), 'from-page-master-region()', 'from-page-master-region()'],
            [new ReferenceOrientation(), 'from-page-master-region()', 'from-page-master-region()'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            [new WritingMode(), 'from-page-master-region(writing-mode)', '', InvalidAttributeValueParseException::class], // no argument allowed in XSL1.1
            [new WritingMode(), 'from-page-master-regio()', '', null],         // typo, name is considered as minus signs
            [new WritingMode(), 'FROM-PAGE-MASTER-REGION()', 'from-page-master-region()', null],        // case-sensitive
            [new WritingMode(), 'from-page-master-region()', 'tb-lr', null],         // false result, you may not get the actual value
        ];
    }
}
