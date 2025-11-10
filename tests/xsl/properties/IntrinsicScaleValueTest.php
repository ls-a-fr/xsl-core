<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Xsl\Properties;

use Lsa\Xml\Utils\Validation\PropertyBank;
use Lsa\Xsl\Core\Tests\Common\CommonMethods;
use Lsa\Xsl\Core\Tests\Providers\IntrinsicScaleValueDataProvider;
use Lsa\Xsl\Core\Validation\Properties\IntrinsicScaleValue;
use PHPUnit\Framework\Attributes\DataProviderExternal;

final class IntrinsicScaleValueTest extends CommonMethods
{
    private string $attributeName = 'intrinsic-scale-value';

    private string $typeClassName = IntrinsicScaleValue::class;

    public function test_type(): void
    {
        $this->assertSame(get_class(PropertyBank::getOne($this->attributeName)), $this->typeClassName);
    }

    #[DataProviderExternal(IntrinsicScaleValueDataProvider::class, 'validDataProvider')]
    public function test_validation_with_valid_values(mixed $value): void
    {
        $this->validValue($this->typeClassName, $value);
    }

    #[DataProviderExternal(IntrinsicScaleValueDataProvider::class, 'invalidDataProvider')]
    public function test_validation_with_invalid_values(mixed $value): void
    {
        $this->invalidValue($this->typeClassName, $value);
    }
}
