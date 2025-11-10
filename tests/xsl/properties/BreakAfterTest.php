<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Xsl\Properties;

use Lsa\Xml\Utils\Validation\PropertyBank;
use Lsa\Xsl\Core\Tests\Common\CommonMethods;
use Lsa\Xsl\Core\Tests\Providers\BreaksDataProvider;
use Lsa\Xsl\Core\Validation\Properties\BreakAfter;
use PHPUnit\Framework\Attributes\DataProviderExternal;

final class BreakAfterTest extends CommonMethods
{
    private string $attributeName = 'break-after';

    private string $typeClassName = BreakAfter::class;

    public function test_type(): void
    {
        $this->assertSame(get_class(PropertyBank::getOne($this->attributeName)), $this->typeClassName);
    }

    #[DataProviderExternal(BreaksDataProvider::class, 'validDataProvider')]
    public function test_validation_with_valid_values(mixed $value): void
    {
        $this->validValue($this->typeClassName, $value);
    }

    #[DataProviderExternal(BreaksDataProvider::class, 'invalidDataProvider')]
    public function test_validation_with_invalid_values(mixed $value): void
    {
        $this->invalidValue($this->typeClassName, $value);
    }
}
