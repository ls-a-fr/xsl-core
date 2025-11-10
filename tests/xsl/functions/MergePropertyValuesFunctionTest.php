<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Xsl\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xml\Utils\Xml\Attribute as XmlAttribute;
use Lsa\Xml\Utils\Xml\Base\Tag;
use Lsa\Xsl\Core\Exceptions\InvalidAttributeValueParseException;
use Lsa\Xsl\Core\Tags\Block\Block;
use Lsa\Xsl\Core\Tags\Multi\MultiProperties;
use Lsa\Xsl\Core\Tags\Multi\MultiPropertySet;
use Lsa\Xsl\Core\Tags\Other\Wrapper;
use Lsa\Xsl\Core\Tests\Common\CommonMethods;
use Lsa\Xsl\Core\Tests\Providers\MergePropertyValuesFunctionDataProvider;
use Lsa\Xsl\Core\Tokenizer\Computing\XslTokenParser;
use PHPUnit\Framework\Attributes\DataProviderExternal;

final class MergePropertyValuesFunctionTest extends CommonMethods
{
    #[DataProviderExternal(MergePropertyValuesFunctionDataProvider::class, 'validDataProvider')]
    public function test_validation_with_valid_values(TypedAttribute $attribute, string $value, string $expected): void
    {
        XslTokenParser::make();
        $root = $this->mockValidRoot($attribute, $value);
        $this->assertEquals($expected, XslTokenParser::parse($value, $root, $attribute)->evaluate());
    }

    #[DataProviderExternal(MergePropertyValuesFunctionDataProvider::class, 'invalidDataProvider')]
    public function test_validation_with_invalid_values(TypedAttribute $attribute, string $value, string $expected, ?string $exceptionClass): void
    {
        if ($exceptionClass !== null) {
            $this->expectException($exceptionClass);
        }
        XslTokenParser::make();
        $root = $this->mockValidRoot($attribute, $value);
        $this->assertNotEquals($expected, XslTokenParser::parse($value, $root, $attribute)->evaluate());
    }

    #[DataProviderExternal(MergePropertyValuesFunctionDataProvider::class, 'validDataProvider')]
    public function test_validation_with_invalid_root1(TypedAttribute $attribute, string $value, string $expected): void
    {
        $this->expectException(InvalidAttributeValueParseException::class);

        XslTokenParser::make();
        $root = $this->mockInvalidRoot1($attribute, $value);
        $this->assertEquals($expected, XslTokenParser::parse($value, $root, $attribute)->evaluate());
    }

    #[DataProviderExternal(MergePropertyValuesFunctionDataProvider::class, 'validDataProvider')]
    public function test_validation_with_invalid_root2(TypedAttribute $attribute, string $value, string $expected): void
    {
        $this->expectException(InvalidAttributeValueParseException::class);

        XslTokenParser::make();
        $root = $this->mockInvalidRoot2($attribute, $value);
        $this->assertEquals($expected, XslTokenParser::parse($value, $root, $attribute)->evaluate());
    }

    private function mockValidRoot(TypedAttribute $attribute, string $value): Tag
    {
        (new MultiProperties())
            ->child((new MultiPropertySet())
                ->attribute(new XmlAttribute('active-state', 'link')))
            ->child((new MultiPropertySet())
                ->attribute(new XmlAttribute('active-state', 'hover')))
            ->child($mock = (new Wrapper())
                ->attribute(new XmlAttribute($attribute->name, $value))
                ->child((new Block())
                    ->content('Hello world')));

        return $mock;
    }

    private function mockInvalidRoot1(TypedAttribute $attribute, string $value): Tag
    {
        $mock = (new Wrapper())
            ->attribute(new XmlAttribute($attribute->name, $value))
            ->child((new Block())
                ->content('Hello world'));

        return $mock;
    }

    private function mockInvalidRoot2(TypedAttribute $attribute, string $value): Tag
    {
        (new MultiProperties())
            ->child((new MultiPropertySet())
                ->attribute(new XmlAttribute('active-state', 'link')))
            ->child($mock = (new MultiPropertySet())
                ->attribute(new XmlAttribute('active-state', 'hover'))
                ->attribute(new XmlAttribute($attribute->name, $value))
                ->child((new Block())
                    ->content('Hello world')));

        return $mock;
    }
}
