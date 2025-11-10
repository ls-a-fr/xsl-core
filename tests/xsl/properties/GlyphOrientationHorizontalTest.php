<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Xsl\Properties;

use Lsa\Xml\Utils\Validation\PropertyBank;
use Lsa\Xsl\Core\Tests\Common\CommonMethods;
use Lsa\Xsl\Core\Tests\Providers\GlyphOrientationHorizontalDataProvider;
use Lsa\Xsl\Core\Validation\Properties\GlyphOrientationHorizontal;
use PHPUnit\Framework\Attributes\DataProviderExternal;

final class GlyphOrientationHorizontalTest extends CommonMethods
{
    private string $attributeName = 'glyph-orientation-horizontal';

    private string $typeClassName = GlyphOrientationHorizontal::class;

    public function test_type(): void
    {
        $this->assertSame(get_class(PropertyBank::getOne($this->attributeName)), $this->typeClassName);
    }

    #[DataProviderExternal(GlyphOrientationHorizontalDataProvider::class, 'validDataProvider')]
    public function test_validation_with_valid_values(mixed $value): void
    {
        $this->validValue($this->typeClassName, $value);
    }

    #[DataProviderExternal(GlyphOrientationHorizontalDataProvider::class, 'invalidDataProvider')]
    public function test_validation_with_invalid_values(mixed $value): void
    {
        $this->invalidValue($this->typeClassName, $value);
    }
}
