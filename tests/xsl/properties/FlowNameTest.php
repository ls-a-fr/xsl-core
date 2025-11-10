<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Xsl\Properties;

use Lsa\Xml\Utils\Validation\PropertyBank;
use Lsa\Xml\Utils\Xml\Attribute as XmlAttribute;
use Lsa\Xsl\Core\Tags\Layout\Flow;
use Lsa\Xsl\Core\Tags\Layout\PageSequence;
use Lsa\Xsl\Core\Tests\Common\CommonMethods;
use Lsa\Xsl\Core\Tests\Providers\NameDataProvider;
use Lsa\Xsl\Core\Validation\Properties\FlowName;
use Lsa\Xsl\Core\Validation\Types\FlowNameType;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use TypeError;

final class FlowNameTest extends CommonMethods
{
    private string $attributeName = 'flow-name';

    private string $typeClassName = FlowName::class;

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
        $type = new FlowNameType();
        $mock = (new PageSequence())
            ->child(($current = new Flow())
                ->attribute(new XmlAttribute('flow-name', 'same-name')))
            ->child((new Flow())
                ->attribute(new XmlAttribute('flow-name', 'same-name')));

        $this->assertFalse($type->validateWithContext('same-name', $mock, $current));
    }

    private function mockType(mixed $value): array
    {
        $type = new FlowNameType();

        if (! is_string($value)) {
            // XmlAttribute only allows string
            $this->expectException(TypeError::class);
        }

        $mock = (new PageSequence())
            ->child(($current = new Flow())
                ->attribute(new XmlAttribute('flow-name', $value)))
            ->child((new Flow())
                ->attribute(new XmlAttribute('flow-name', 'different-'.$value)));

        return [$type, $mock, $current];
    }
}
