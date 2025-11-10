<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Xsl\Properties;

use Lsa\Xml\Utils\Xml\Attribute as XmlAttribute;
use Lsa\Xml\Utils\Xml\Base\Tag;
use Lsa\Xsl\Core\Exceptions\InvalidAttributeValueParseException;
use Lsa\Xsl\Core\Tags\Block\Block;
use Lsa\Xsl\Core\Tests\Common\CommonMethods;
use Lsa\Xsl\Core\Tests\Providers\FromNearestSpecifiedValueFunctionDataProvider;
use Lsa\Xsl\Core\Tokenizer\Computing\XslTokenParser;
use Lsa\Xsl\Core\Validation\Properties\FontSize;
use PHPUnit\Framework\Attributes\DataProviderExternal;

final class FromNearestSpecifiedValueFunctionTest extends CommonMethods
{
    #[DataProviderExternal(FromNearestSpecifiedValueFunctionDataProvider::class, 'validDataProvider')]
    public function test_validation_with_valid_values(string $value, string $expected): void
    {
        XslTokenParser::make();
        $root = $this->mockValidRoot($value);
        $this->assertEquals($expected, XslTokenParser::parse($value, $root, new FontSize())->evaluate());
    }

    #[DataProviderExternal(FromNearestSpecifiedValueFunctionDataProvider::class, 'invalidDataProvider')]
    public function test_validation_with_invalid_values(string $value, string $expected, ?string $exceptionClass): void
    {
        if ($exceptionClass !== null) {
            $this->expectException($exceptionClass);
        }
        XslTokenParser::make();
        $root = $this->mockValidRoot($value);
        $this->assertNotEquals($expected, XslTokenParser::parse($value, $root, new FontSize())->evaluate());
    }

    #[DataProviderExternal(FromNearestSpecifiedValueFunctionDataProvider::class, 'validDataProvider')]
    public function test_validation_with_invalid_root1(string $value, string $expected): void
    {
        $this->expectException(InvalidAttributeValueParseException::class);

        XslTokenParser::make();
        $root = $this->mockInvalidRoot1($value);
        $this->assertEquals($expected, XslTokenParser::parse($value, $root, new FontSize())->evaluate());
    }

    #[DataProviderExternal(FromNearestSpecifiedValueFunctionDataProvider::class, 'validDataProvider')]
    public function test_validation_with_invalid_root2(string $value, string $expected): void
    {
        $this->expectException(InvalidAttributeValueParseException::class);

        XslTokenParser::make();
        $root = $this->mockInvalidRoot2($value);
        $this->assertEquals($expected, XslTokenParser::parse($value, $root, new FontSize())->evaluate());
    }

    private function mockValidRoot(string $value): Tag
    {
        (new Block())
            ->attribute(new XmlAttribute('font-size', '12pt'))
            ->attribute(new XmlAttribute('line-height', '14pt'))
            ->child($mock = (new Block())
                ->attribute(new XmlAttribute('line-height', $value)));

        return $mock;
    }

    private function mockInvalidRoot1(string $value): Tag
    {
        (new Block())
            ->attribute(new XmlAttribute('margin', '14pt'))
            ->child($mock = (new Block())
                ->attribute(new XmlAttribute('line-height', $value)));

        return $mock;
    }

    private function mockInvalidRoot2(string $value): Tag
    {
        $mock = (new Block())
            ->attribute(new XmlAttribute('line-height', $value));

        return $mock;
    }
}
