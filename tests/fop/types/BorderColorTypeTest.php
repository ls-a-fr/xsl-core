<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Fop\Types;

use Lsa\Xml\Utils\Xml\Attribute as XmlAttribute;
use Lsa\Xml\Utils\Xml\XmlComparator;
use Lsa\Xsl\Core\Tags\Layout\ColorProfile;
use Lsa\Xsl\Core\Tags\Layout\Declarations;
use Lsa\Xsl\Core\Tests\Fop\CommonMethodsFop;
use Lsa\Xsl\Core\Tests\Providers\BorderColorDataProvider;
use Lsa\Xsl\Core\Validation\Types\BorderColorType;
use Lsa\Xsl\Core\Validation\Types\Functions\ColorRgbIccType;
use PHPUnit\Framework\Attributes\DataProviderExternal;

final class BorderColorTypeTest extends CommonMethodsFop
{
    public function test_schema(): void
    {
        $comparator = new XmlComparator(XmlComparator::VALIDATION_STRICT | XmlComparator::VALIDATION_SWAPPABLE_ATTRIBUTE_VALUES);
        $xsd = self::$xsdElement->xpath('/x:schema/x:simpleType[@name="border_color_Type"]');
        $fop = self::$fopElement->xpath('/x:schema/x:simpleType[@name="border_color_Type"]');

        $this->assertNotEmpty($xsd);
        $this->assertNotEmpty($fop);

        $result = $comparator->compareNodes($fop, $xsd);
        $this->assertTrue($result, implode("\n", $comparator->getErrors()));
    }

    #[DataProviderExternal(BorderColorDataProvider::class, 'validDataProvider')]
    public function test_validation_with_valid_values(mixed $value): void
    {
        [$color, $root, $current] = $this->mockBorderColorType();
        $this->validValueWithContext($color, $root, $current, $value);
    }

    #[DataProviderExternal(BorderColorDataProvider::class, 'invalidDataProvider')]
    public function test_validation_with_invalid_values(mixed $value): void
    {
        [$color, $root, $current] = $this->mockBorderColorType();
        $this->invalidValueWithContext($color, $root, $current, $value);
    }

    private function mockBorderColorType(): array
    {
        $color = new BorderColorType();
        /** @var ColorRgbIccType|null */
        $rgbIcc = $color->search(ColorRgbIccType::class);

        $this->assertFalse(is_null($rgbIcc));
        $this->assertInstanceOf(ColorRgbIccType::class, $rgbIcc);

        $mock = (new Declarations())
            ->child((new ColorProfile())
                ->attribute(new XmlAttribute('color-profile-name', 'RGBColorProfile')))
            ->child((new ColorProfile())
                ->attribute(new XmlAttribute('color-profile-name', 'CMYKColorProfile')));

        return [$color, $mock, null];
    }
}
