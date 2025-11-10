<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Xsl\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xml\Utils\Xml\Attribute as XmlAttribute;
use Lsa\Xml\Utils\Xml\Base\Tag;
use Lsa\Xsl\Core\Tags\Block\Block;
use Lsa\Xsl\Core\Tags\List\ListBlock;
use Lsa\Xsl\Core\Tags\List\ListItem;
use Lsa\Xsl\Core\Tags\List\ListItemBody;
use Lsa\Xsl\Core\Tests\Common\CommonMethods;
use Lsa\Xsl\Core\Tests\Providers\InheritablePropertyValueFunctionDataProvider;
use Lsa\Xsl\Core\Tokenizer\Computing\XslTokenParser;
use PHPUnit\Framework\Attributes\DataProviderExternal;

final class InheritablePropertyValueFunctionTest extends CommonMethods
{
    #[DataProviderExternal(InheritablePropertyValueFunctionDataProvider::class, 'validDataProvider')]
    public function test_validation_with_valid_values(TypedAttribute $attribute, string $value, string $expected): void
    {
        XslTokenParser::make();
        $root = $this->mockValidRoot($attribute, $value);
        $this->assertEquals($expected, XslTokenParser::parse($value, $root, $attribute)->evaluate());
    }

    #[DataProviderExternal(InheritablePropertyValueFunctionDataProvider::class, 'invalidDataProvider')]
    public function test_validation_with_invalid_values(TypedAttribute $attribute, string $value, string $expected, ?string $exceptionClass): void
    {
        if ($exceptionClass !== null) {
            $this->expectException($exceptionClass);
        }
        XslTokenParser::make();
        $root = $this->mockValidRoot($attribute, $value);
        $this->assertNotEquals($expected, XslTokenParser::parse($value, $root, $attribute)->evaluate());
    }

    private function mockValidRoot(TypedAttribute $attribute, string $value): Tag
    {
        (new ListBlock())
            ->child((new ListItem())
                ->attribute(new XmlAttribute('margin', '14pt'))
                ->attribute(new XmlAttribute('font-size', '12pt'))
                ->attribute(new XmlAttribute('color', 'red'))
                ->child((new ListItemBody())
                    ->attribute(new XmlAttribute('background-color', 'green'))
                    ->child($mock = (new Block())
                        ->attribute(new XmlAttribute($attribute->name, $value)))));

        return $mock;
    }
}
