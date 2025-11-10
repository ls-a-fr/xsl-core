<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Xsl\Properties;

use Lsa\Xml\Utils\Validation\PropertyBank;
use Lsa\Xsl\Core\Tests\Common\CommonMethods;
use Lsa\Xsl\Core\Tests\Providers\MergeDataProvider;
use Lsa\Xsl\Core\Validation\Properties\MergePagesAcrossIndexKeyReferences;
use PHPUnit\Framework\Attributes\DataProviderExternal;

final class MergePagesAcrossIndexKeyReferencesTest extends CommonMethods
{
    private string $attributeName = 'merge-pages-across-index-key-references';

    private string $typeClassName = MergePagesAcrossIndexKeyReferences::class;

    public function test_type(): void
    {
        $this->assertSame(get_class(PropertyBank::getOne($this->attributeName)), $this->typeClassName);
    }

    #[DataProviderExternal(MergeDataProvider::class, 'validDataProvider')]
    public function test_validation_with_valid_values(mixed $value): void
    {
        $this->validValue($this->typeClassName, $value);
    }

    #[DataProviderExternal(MergeDataProvider::class, 'invalidDataProvider')]
    public function test_validation_with_invalid_values(mixed $value): void
    {
        $this->invalidValue($this->typeClassName, $value);
    }
}
