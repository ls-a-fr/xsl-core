<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Xsl\Properties;

use Lsa\Xml\Utils\Validation\PropertyBank;
use Lsa\Xml\Utils\Xml\Attribute as XmlAttribute;
use Lsa\Xsl\Core\Tags\Layout\ColorProfile;
use Lsa\Xsl\Core\Tags\Layout\Declarations;
use Lsa\Xsl\Core\Tests\Common\CommonMethods;
use Lsa\Xsl\Core\Tests\Providers\BackgroundColorDataProvider;
use Lsa\Xsl\Core\Validation\Properties\BackgroundColor;
use Lsa\Xsl\Core\Validation\Types\BackgroundColorType;
use Lsa\Xsl\Core\Validation\Types\Functions\ColorRgbIccType;
use PHPUnit\Framework\Attributes\DataProviderExternal;

final class BackgroundColorTest extends CommonMethods
{
    private string $attributeName = 'background-color';

    private string $typeClassName = BackgroundColor::class;

    public function test_type(): void
    {
        $this->assertSame(get_class(PropertyBank::getOne($this->attributeName)), $this->typeClassName);
    }

    #[DataProviderExternal(BackgroundColorDataProvider::class, 'validDataProvider')]
    public function test_validation_with_valid_values(mixed $value): void
    {
        [$color, $root, $current] = $this->mockBackgroundColorType();
        $this->validValueWithContext($color, $root, $current, $value);
    }

    #[DataProviderExternal(BackgroundColorDataProvider::class, 'invalidDataProvider')]
    public function test_validation_with_invalid_values(mixed $value): void
    {
        [$color, $root, $current] = $this->mockBackgroundColorType();
        $this->invalidValueWithContext($color, $root, $current, $value);
    }

    private function mockBackgroundColorType(): array
    {
        $color = new BackgroundColorType();
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
