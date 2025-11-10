<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Xsl\Properties;

use Lsa\Xml\Utils\Validation\PropertyBank;
use Lsa\Xml\Utils\Xml\Attribute as XmlAttribute;
use Lsa\Xsl\Core\Tags\Layout\LayoutMasterSet;
use Lsa\Xsl\Core\Tags\Layout\PageSequenceMaster;
use Lsa\Xsl\Core\Tests\Common\CommonMethods;
use Lsa\Xsl\Core\Tests\Providers\NameDataProvider;
use Lsa\Xsl\Core\Validation\Properties\MasterName;
use Lsa\Xsl\Core\Validation\Types\MasterNameType;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use TypeError;

final class MasterNameTest extends CommonMethods
{
    private string $attributeName = 'master-name';

    private string $typeClassName = MasterName::class;

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
        $type = new MasterNameType();
        $mock = (new LayoutMasterSet())
            ->child(($current = new PageSequenceMaster())
                ->attribute(new XmlAttribute('master-name', 'same-name')))
            ->child((new PageSequenceMaster())
                ->attribute(new XmlAttribute('master-name', 'same-name')));

        $this->assertFalse($type->validateWithContext('same-name', $mock, $current));
    }

    private function mockType(mixed $value): array
    {
        $type = new MasterNameType();

        if (! is_string($value)) {
            // XmlAttribute only allows string
            $this->expectException(TypeError::class);
        }

        $mock = (new LayoutMasterSet())
            ->child(($current = new PageSequenceMaster())
                ->attribute(new XmlAttribute('master-name', $value)))
            ->child((new PageSequenceMaster())
                ->attribute(new XmlAttribute('master-name', 'different-'.$value)));

        return [$type, $mock, $current];
    }
}
