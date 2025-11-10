<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Xsl\Properties;

use Lsa\Xml\Utils\Validation\PropertyBank;
use Lsa\Xsl\Core\Tests\Common\CommonMethods;
use Lsa\Xsl\Core\Tests\Providers\TreatAsWordSpaceDataProvider;
use Lsa\Xsl\Core\Validation\Properties\TreatAsWordSpace;
use PHPUnit\Framework\Attributes\DataProviderExternal;

final class TreatAsWordSpaceTest extends CommonMethods
{
    private string $attributeName = 'treat-as-word-space';

    private string $typeClassName = TreatAsWordSpace::class;

    public function test_type(): void
    {
        $this->assertSame(get_class(PropertyBank::getOne($this->attributeName)), $this->typeClassName);
    }

    #[DataProviderExternal(TreatAsWordSpaceDataProvider::class, 'validDataProvider')]
    public function test_validation_with_valid_values(mixed $value): void
    {
        $this->validValue($this->typeClassName, $value);
    }

    #[DataProviderExternal(TreatAsWordSpaceDataProvider::class, 'invalidDataProvider')]
    public function test_validation_with_invalid_values(mixed $value): void
    {
        $this->invalidValue($this->typeClassName, $value);
    }
}
