<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Xsl\Properties;

use Lsa\Xml\Utils\Validation\PropertyBank;
use Lsa\Xml\Utils\Xml\Attribute as XmlAttribute;
use Lsa\Xsl\Core\Tags\Layout\Flow;
use Lsa\Xsl\Core\Tags\Layout\Root;
use Lsa\Xsl\Core\Tests\Common\CommonMethods;
use Lsa\Xsl\Core\Tests\Providers\InternalDestinationDataProvider;
use Lsa\Xsl\Core\Validation\Properties\InternalDestination;
use Lsa\Xsl\Core\Validation\Types\InternalDestinationType;
use Lsa\Xsl\Core\Validation\Types\Xsl\IdRefType;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use TypeError;

final class InternalDestinationTest extends CommonMethods
{
    private string $attributeName = 'internal-destination';

    private string $typeClassName = InternalDestination::class;

    public function test_type(): void
    {
        $this->assertSame(get_class(PropertyBank::getOne($this->attributeName)), $this->typeClassName);
    }

    #[DataProviderExternal(InternalDestinationDataProvider::class, 'validDataProvider')]
    public function test_validation_with_valid_values(mixed $value): void
    {
        [$type, $root, $current] = $this->mockType($value);
        $this->validValueWithContext($type, $root, $current, $value);
    }

    #[DataProviderExternal(InternalDestinationDataProvider::class, 'invalidDataProvider')]
    public function test_validation_with_invalid_values(mixed $value): void
    {
        [$type, $root, $current] = $this->mockType($value);
        $this->invalidValueWithContext($type, $root, $current, $value);
    }

    private function mockType(mixed $value): array
    {
        $type = new InternalDestinationType();
        /** @var Lsa\Xsl\Core\Validation\Types\Xsl\IdRefType|null */
        $idRefType = $type->search(IdRefType::class);

        $this->assertFalse(is_null($idRefType));
        $this->assertInstanceOf(IdRefType::class, $idRefType);

        // XmlAttribute only allow for string
        if (! is_string($value)) {
            $this->expectException(TypeError::class);
        }

        $mock = (new Root())
            ->child((new Flow())
                ->attribute(new XmlAttribute('id', $value)));

        return [$type, $mock, null];
    }
}
