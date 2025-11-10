<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Fop\Types;

use Lsa\Xml\Utils\Xml\XmlComparator;
use Lsa\Xsl\Core\Tests\Fop\CommonMethodsFop;
use Lsa\Xsl\Core\Tests\Providers\LengthDataProvider;
use Lsa\Xsl\Core\Validation\Types\Xsl\LengthType;
use PHPUnit\Framework\Attributes\DataProviderExternal;

final class LengthTypeTest extends CommonMethodsFop
{
    public function test_schema(): void
    {
        $comparator = new XmlComparator(XmlComparator::VALIDATION_STRICT | XmlComparator::VALIDATION_SWAPPABLE_ATTRIBUTE_VALUES);
        $xsd = self::$xsdElement->xpath('/x:schema/x:simpleType[@name="length_Type"]');
        $fop = self::$fopElement->xpath('/x:schema/x:simpleType[@name="length_Type"]');

        $this->assertNotEmpty($xsd);
        $this->assertNotEmpty($fop);

        $result = $comparator->compareNodes($fop, $xsd);
        $this->assertTrue($result, implode("\n", $comparator->getErrors()));
    }

    #[DataProviderExternal(LengthDataProvider::class, 'validDataProvider')]
    public function test_validation_with_valid_values(mixed $value): void
    {
        $this->validValue(LengthType::class, $value);
    }

    #[DataProviderExternal(LengthDataProvider::class, 'invalidDataProvider')]
    public function test_validation_with_invalid_values(mixed $value): void
    {
        $this->invalidValue(LengthType::class, $value);
    }
}
