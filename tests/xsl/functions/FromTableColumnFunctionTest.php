<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Xsl\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xml\Utils\Xml\Attribute as XmlAttribute;
use Lsa\Xml\Utils\Xml\Base\Tag;
use Lsa\Xsl\Core\Tags\Block\Block;
use Lsa\Xsl\Core\Tags\Table\Table;
use Lsa\Xsl\Core\Tags\Table\TableCell;
use Lsa\Xsl\Core\Tags\Table\TableColumn;
use Lsa\Xsl\Core\Tags\Table\TableRow;
use Lsa\Xsl\Core\Tests\Common\CommonMethods;
use Lsa\Xsl\Core\Tests\Providers\FromTableColumnFunctionDataProvider;
use Lsa\Xsl\Core\Tokenizer\Computing\XslTokenParser;
use PHPUnit\Framework\Attributes\DataProviderExternal;

final class FromTableColumnFunctionTest extends CommonMethods
{
    #[DataProviderExternal(FromTableColumnFunctionDataProvider::class, 'validDataProvider')]
    public function test_validation_with_valid_values(TypedAttribute $attribute, string $value, string $expected): void
    {
        XslTokenParser::make();
        $root = $this->mockValidRoot($attribute, $value);
        $this->assertEquals($expected, XslTokenParser::parse($value, $root, $attribute)->evaluate());
    }

    #[DataProviderExternal(FromTableColumnFunctionDataProvider::class, 'invalidDataProvider')]
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
        (new Table())
            ->child((new TableColumn())
                ->attribute(new XmlAttribute('column-number', '1'))
                ->attribute(new XmlAttribute('number-columns-spanned', '3')))
            ->child((new TableColumn())
                ->attribute(new XmlAttribute('margin-top', '0.75cm'))
                ->attribute(new XmlAttribute('font-size', '14pt')))
            ->child((new TableRow())
                ->child((new TableCell())
                    ->child((new Block())->content('One')))
                ->child((new TableCell())
                    ->child((new Block())->content('Two')))
                ->child((new TableCell())
                    ->child((new Block())->content('Three')))
                ->child((new TableCell())
                    ->child($mock = (new Block())
                        ->attribute(new XmlAttribute($attribute->name, $value))
                        ->content('An example content'))));

        return $mock;
    }
}
