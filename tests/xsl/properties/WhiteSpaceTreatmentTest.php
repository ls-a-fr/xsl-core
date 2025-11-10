<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Xsl\Properties;

use Lsa\Xml\Utils\Validation\PropertyBank;
use Lsa\Xsl\Core\Tests\Common\CommonMethods;
use Lsa\Xsl\Core\Tests\Providers\WhiteSpaceTreatmentDataProvider;
use Lsa\Xsl\Core\Validation\Properties\WhiteSpaceTreatment;
use PHPUnit\Framework\Attributes\DataProviderExternal;

final class WhiteSpaceTreatmentTest extends CommonMethods
{
    private string $attributeName = 'white-space-treatment';

    private string $typeClassName = WhiteSpaceTreatment::class;

    public function test_type(): void
    {
        $this->assertSame(get_class(PropertyBank::getOne($this->attributeName)), $this->typeClassName);
    }

    #[DataProviderExternal(WhiteSpaceTreatmentDataProvider::class, 'validDataProvider')]
    public function test_validation_with_valid_values(mixed $value): void
    {
        $this->validValue($this->typeClassName, $value);
    }

    #[DataProviderExternal(WhiteSpaceTreatmentDataProvider::class, 'invalidDataProvider')]
    public function test_validation_with_invalid_values(mixed $value): void
    {
        $this->invalidValue($this->typeClassName, $value);
    }
}
