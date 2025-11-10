<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Xsl\Properties;

use Lsa\Xml\Utils\Validation\PropertyBank;
use Lsa\Xml\Utils\Xml\Attribute as XmlAttribute;
use Lsa\Xsl\Core\Tags\Layout\FlowMap;
use Lsa\Xsl\Core\Tags\Layout\LayoutMasterSet;
use Lsa\Xsl\Core\Tests\Common\CommonMethods;
use Lsa\Xsl\Core\Tests\Providers\NameDataProvider;
use Lsa\Xsl\Core\Validation\Properties\FlowMapReference;
use Lsa\Xsl\Core\Validation\Types\FlowMapReferenceType;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use TypeError;

final class FlowMapReferenceTest extends CommonMethods
{
    private string $attributeName = 'flow-map-reference';

    private string $typeClassName = FlowMapReference::class;

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

    private function mockType(mixed $value): array
    {
        $type = new FlowMapReferenceType();

        if (! is_string($value)) {
            // XmlAttribute only allows string
            $this->expectException(TypeError::class);
        }

        $mock = (new LayoutMasterSet())
            ->child((new FlowMap())
                ->attribute(new XmlAttribute('flow-map-name', $value)));

        return [$type, $mock, null];
    }
}
