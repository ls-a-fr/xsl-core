<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Xsl\Properties;

use Lsa\Xml\Utils\Validation\PropertyBank;
use Lsa\Xml\Utils\Xml\Attribute as XmlAttribute;
use Lsa\Xsl\Core\Tags\Block\Block;
use Lsa\Xsl\Core\Tags\Block\BlockContainer;
use Lsa\Xsl\Core\Tags\Inline\ExternalGraphic;
use Lsa\Xsl\Core\Tests\Common\CommonMethods;
use Lsa\Xsl\Core\Tests\Providers\NameDataProvider;
use Lsa\Xsl\Core\Validation\Properties\Id;
use Lsa\Xsl\Core\Validation\Types\Xsl\IdType;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use TypeError;

final class IdTest extends CommonMethods
{
    private string $attributeName = 'id';

    private string $typeClassName = Id::class;

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
        $type = new IdType();
        $mock = (new BlockContainer())
            ->child(($current = new Block())
                ->attribute(new XmlAttribute('id', 'same-name')))
            ->child((new ExternalGraphic())
                ->attribute(new XmlAttribute('id', 'same-name')));

        $this->assertFalse($type->validateWithContext('same-name', $mock, $current));
    }

    private function mockType(mixed $value): array
    {
        $type = new IdType();

        if (! is_string($value)) {
            // XmlAttribute only allows string
            $this->expectException(TypeError::class);
        }

        $mock = (new BlockContainer())
            ->child(($current = new Block())
                ->attribute(new XmlAttribute('id', $value)))
            ->child((new ExternalGraphic())
                ->attribute(new XmlAttribute('id', 'different-'.$value)));

        return [$type, $mock, $current];
    }
}
