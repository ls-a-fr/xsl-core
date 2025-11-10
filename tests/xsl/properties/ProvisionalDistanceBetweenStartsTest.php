<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Xsl\Properties;

use Lsa\Xml\Utils\Validation\PropertyBank;
use Lsa\Xsl\Core\Tests\Common\CommonMethods;
use Lsa\Xsl\Core\Tests\Providers\ProvisionalDistanceDataProvider;
use Lsa\Xsl\Core\Validation\Properties\ProvisionalDistanceBetweenStarts;
use PHPUnit\Framework\Attributes\DataProviderExternal;

final class ProvisionalDistanceBetweenStartsTest extends CommonMethods
{
    private string $attributeName = 'provisional-distance-between-starts';

    private string $typeClassName = ProvisionalDistanceBetweenStarts::class;

    public function test_type(): void
    {
        $this->assertSame(get_class(PropertyBank::getOne($this->attributeName)), $this->typeClassName);
    }

    #[DataProviderExternal(ProvisionalDistanceDataProvider::class, 'validDataProvider')]
    public function test_validation_with_valid_values(mixed $value): void
    {
        $this->validValue($this->typeClassName, $value);
    }

    #[DataProviderExternal(ProvisionalDistanceDataProvider::class, 'invalidDataProvider')]
    public function test_validation_with_invalid_values(mixed $value): void
    {
        $this->invalidValue($this->typeClassName, $value);
    }
}
