<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Xsl\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xml\Utils\Xml\Attribute as XmlAttribute;
use Lsa\Xsl\Core\Tags\Layout\ColorProfile;
use Lsa\Xsl\Core\Tags\Layout\Declarations;
use Lsa\Xsl\Core\Tests\Common\CommonMethods;
use Lsa\Xsl\Core\Tests\Providers\RgbIccFunctionDataProvider;
use Lsa\Xsl\Core\Tokenizer\Computing\XslTokenParser;
use Lsa\Xsl\Core\Validation\Types\Functions\ColorRgbIccType;
use PHPUnit\Framework\Attributes\DataProviderExternal;

final class RgbIccFunctionTest extends CommonMethods
{
    #[DataProviderExternal(RgbIccFunctionDataProvider::class, 'validDataProvider')]
    public function test_validation_with_valid_values(string $value, string $expected): void
    {
        XslTokenParser::make();
        [$root, $attribute] = $this->mockRoot();
        $this->assertEquals($expected, XslTokenParser::parse($value, $root, $attribute)->evaluate());
    }

    #[DataProviderExternal(RgbIccFunctionDataProvider::class, 'invalidDataProvider')]
    public function test_validation_with_invalid_values(string $value, string $expected, ?string $exceptionClass): void
    {
        if ($exceptionClass !== null) {
            $this->expectException($exceptionClass);
        }
        XslTokenParser::make();
        [$root, $attribute] = $this->mockRoot();
        $this->assertNotEquals($expected, XslTokenParser::parse($value, $root, $attribute)->evaluate());
    }

    private function mockRoot(): array
    {
        $mock = (new Declarations())
            ->child((new ColorProfile())
                ->attribute(new XmlAttribute('color-profile-name', 'RGBColorProfile')))
            ->child((new ColorProfile())
                ->attribute(new XmlAttribute('color-profile-name', 'CMYKColorProfile')));

        return [$mock, new TypedAttribute('color', ColorRgbIccType::class)];
    }
}
