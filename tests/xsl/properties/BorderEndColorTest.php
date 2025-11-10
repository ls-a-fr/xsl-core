<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Xsl\Properties;

use Lsa\Xml\Utils\Validation\PropertyBank;
use Lsa\Xml\Utils\Xml\Attribute as XmlAttribute;
use Lsa\Xsl\Core\Tags\Layout\ColorProfile;
use Lsa\Xsl\Core\Tags\Layout\Declarations;
use Lsa\Xsl\Core\Tests\Common\CommonMethods;
use Lsa\Xsl\Core\Tests\Providers\BorderColorDataProvider;
use Lsa\Xsl\Core\Validation\Properties\BorderEndColor;
use Lsa\Xsl\Core\Validation\Types\BorderColorType;
use Lsa\Xsl\Core\Validation\Types\Functions\ColorRgbIccType;
use PHPUnit\Framework\Attributes\DataProviderExternal;

final class BorderEndColorTest extends CommonMethods
{
    private string $attributeName = 'border-end-color';

    private string $typeClassName = BorderEndColor::class;

    public function test_type(): void
    {
        $this->assertSame(get_class(PropertyBank::getOne($this->attributeName)), $this->typeClassName);
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
