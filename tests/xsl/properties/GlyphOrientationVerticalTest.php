<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Xsl\Properties;

use Lsa\Xml\Utils\Validation\PropertyBank;
use Lsa\Xsl\Core\Tests\Common\CommonMethods;
use Lsa\Xsl\Core\Tests\Providers\GlyphOrientationVerticalDataProvider;
use Lsa\Xsl\Core\Validation\Properties\GlyphOrientationVertical;
use PHPUnit\Framework\Attributes\DataProviderExternal;

final class GlyphOrientationVerticalTest extends CommonMethods
{
    private string $attributeName = 'glyph-orientation-vertical';

    private string $typeClassName = GlyphOrientationVertical::class;

    public function test_type(): void
    {
        $this->assertSame(get_class(PropertyBank::getOne($this->attributeName)), $this->typeClassName);
    }

    #[DataProviderExternal(GlyphOrientationVerticalDataProvider::class, 'validDataProvider')]
    public function test_validation_with_valid_values(mixed $value): void
    {
        $this->validValue($this->typeClassName, $value);
    }

    #[DataProviderExternal(GlyphOrientationVerticalDataProvider::class, 'invalidDataProvider')]
    public function test_validation_with_invalid_values(mixed $value): void
    {
        $this->invalidValue($this->typeClassName, $value);
    }
}
