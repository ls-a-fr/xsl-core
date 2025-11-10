<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Xsl\Properties;

use Lsa\Xml\Utils\Validation\PropertyBank;
use Lsa\Xsl\Core\Tests\Common\CommonMethods;
use Lsa\Xsl\Core\Tests\Providers\LineHeightShiftAdjustmentDataProvider;
use Lsa\Xsl\Core\Validation\Properties\LineHeightShiftAdjustment;
use PHPUnit\Framework\Attributes\DataProviderExternal;

final class LineHeightShiftAdjustmentTest extends CommonMethods
{
    private string $attributeName = 'line-height-shift-adjustment';

    private string $typeClassName = LineHeightShiftAdjustment::class;

    public function test_type(): void
    {
        $this->assertSame(get_class(PropertyBank::getOne($this->attributeName)), $this->typeClassName);
    }

    #[DataProviderExternal(LineHeightShiftAdjustmentDataProvider::class, 'validDataProvider')]
    public function test_validation_with_valid_values(mixed $value): void
    {
        $this->validValue($this->typeClassName, $value);
    }

    #[DataProviderExternal(LineHeightShiftAdjustmentDataProvider::class, 'invalidDataProvider')]
    public function test_validation_with_invalid_values(mixed $value): void
    {
        $this->invalidValue($this->typeClassName, $value);
    }
}
