<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Xsl\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xml\Utils\Xml\Attribute as XmlAttribute;
use Lsa\Xml\Utils\Xml\Base\Tag;
use Lsa\Xsl\Core\Tags\Block\Block;
use Lsa\Xsl\Core\Tags\Block\BlockContainer;
use Lsa\Xsl\Core\Tags\Layout\Flow;
use Lsa\Xsl\Core\Tags\Layout\PageSequence;
use Lsa\Xsl\Core\Tests\Common\CommonMethods;
use Lsa\Xsl\Core\Tests\Providers\FromParentFunctionDataProvider;
use Lsa\Xsl\Core\Tokenizer\Computing\XslTokenParser;
use PHPUnit\Framework\Attributes\DataProviderExternal;

final class FromParentFunctionTest extends CommonMethods
{
    #[DataProviderExternal(FromParentFunctionDataProvider::class, 'validDataProvider')]
    public function test_validation_with_valid_values(TypedAttribute $attribute, string $value, string $expected): void
    {
        XslTokenParser::make();
        $root = $this->mockValidRoot($attribute, $value);
        $this->assertEquals($expected, XslTokenParser::parse($value, $root, $attribute)->evaluate());
    }

    #[DataProviderExternal(FromParentFunctionDataProvider::class, 'invalidDataProvider')]
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
        (new PageSequence())
            ->child((new Flow())
                ->child((new BlockContainer())
                    ->attribute(new XmlAttribute('clear', 'start'))
                    ->attribute(new XmlAttribute('margin-top', '1em'))
                    ->child($mock = (new Block())
                        ->attribute(new XmlAttribute($attribute->name, $value))
                        ->content('An example content'))));

        return $mock;
    }
}
