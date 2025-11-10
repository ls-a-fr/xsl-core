<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Xsl\Properties;

use Lsa\Xml\Utils\Validation\PropertyBank;
use Lsa\Xml\Utils\Xml\Attribute as XmlAttribute;
use Lsa\Xsl\Core\Tags\Layout\FlowMap;
use Lsa\Xsl\Core\Tags\Layout\LayoutMasterSet;
use Lsa\Xsl\Core\Tests\Common\CommonMethods;
use Lsa\Xsl\Core\Tests\Providers\NameDataProvider;
use Lsa\Xsl\Core\Validation\Properties\FlowMapName;
use Lsa\Xsl\Core\Validation\Types\FlowMapNameType;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use TypeError;

final class FlowMapNameTest extends CommonMethods
{
    private string $attributeName = 'flow-map-name';

    private string $typeClassName = FlowMapName::class;

    public function test_type(): void
    {
        $this->assertSame(get_class(PropertyBank::getOne($this->attributeName)), $this->typeClassName);
    }

    #[DataProviderExternal(NameDataProvider::class, 'validDataProvider')]
    public function test_validation_with_valid_values(mixed $value): void
    {
        [$type, $root, $current] = $this->mockType($value);
        $this->validValueWithContext($type, $root, $current, $value);
    }

    #[DataProviderExternal(NameDataProvider::class, 'invalidDataProvider')]
    public function test_validation_with_invalid_values(mixed $value): void
    {
        [$type, $root, $current] = $this->mockType($value);
        $this->invalidValueWithContext($type, $root, $current, $value);
    }

    public function test_validation_with_same_name(): void
    {
        $type = new FlowMapNameType();
        $mock = (new LayoutMasterSet())
            ->child(($current = new FlowMap())
                ->attribute(new XmlAttribute('flow-map-name', 'same-name')))
            ->child((new FlowMap())
                ->attribute(new XmlAttribute('flow-map-name', 'same-name')));

        $this->assertFalse($type->validateWithContext('same-name', $mock, $current));
    }

    private function mockType(mixed $value): array
    {
        $type = new FlowMapNameType();

        if (! is_string($value)) {
            // XmlAttribute only allows string
            $this->expectException(TypeError::class);
        }

        $mock = (new LayoutMasterSet())
            ->child(($current = new FlowMap())
                ->attribute(new XmlAttribute('flow-map-name', $value)))
            ->child((new FlowMap())
                ->attribute(new XmlAttribute('flow-map-name', 'different-'.$value)));

        return [$type, $mock, $current];
    }
}
