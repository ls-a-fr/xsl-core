<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Xsl\Properties;

use Lsa\Xml\Utils\Validation\PropertyBank;
use Lsa\Xsl\Core\Tests\Common\CommonMethods;
use Lsa\Xsl\Core\Tests\Providers\WhiteSpaceCollapseDataProvider;
use Lsa\Xsl\Core\Validation\Properties\WhiteSpaceCollapse;
use PHPUnit\Framework\Attributes\DataProviderExternal;

final class WhiteSpaceCollapseTest extends CommonMethods
{
    private string $attributeName = 'white-space-collapse';

    private string $typeClassName = WhiteSpaceCollapse::class;

    public function test_type(): void
    {
        $this->assertSame(get_class(PropertyBank::getOne($this->attributeName)), $this->typeClassName);
    }

    #[DataProviderExternal(WhiteSpaceCollapseDataProvider::class, 'validDataProvider')]
    public function test_validation_with_valid_values(mixed $value): void
    {
        $this->validValue($this->typeClassName, $value);
    }

    #[DataProviderExternal(WhiteSpaceCollapseDataProvider::class, 'invalidDataProvider')]
    public function test_validation_with_invalid_values(mixed $value): void
    {
        $this->invalidValue($this->typeClassName, $value);
    }
}
