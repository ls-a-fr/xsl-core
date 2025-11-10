<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Xsl\Properties;

use Lsa\Xml\Utils\Xml\Attribute as XmlAttribute;
use Lsa\Xml\Utils\Xml\Base\Tag;
use Lsa\Xsl\Core\Exceptions\InvalidAttributeValueParseException;
use Lsa\Xsl\Core\Tags\Block\Block;
use Lsa\Xsl\Core\Tags\Table\Table;
use Lsa\Xsl\Core\Tags\Table\TableColumn;
use Lsa\Xsl\Core\Tests\Common\CommonMethods;
use Lsa\Xsl\Core\Tests\Providers\ProportionalColumnWidthFunctionDataProvider;
use Lsa\Xsl\Core\Tokenizer\Computing\XslTokenParser;
use Lsa\Xsl\Core\Validation\Properties\ColumnWidth;
use Lsa\Xsl\Core\Validation\Types\TableLayoutType;
use PHPUnit\Framework\Attributes\DataProviderExternal;

final class ProportionalColumnWidthFunctionTest extends CommonMethods
{
    #[DataProviderExternal(ProportionalColumnWidthFunctionDataProvider::class, 'validDataProvider')]
    public function test_validation_with_valid_values(string $value, string $expected): void
    {
        XslTokenParser::make();
        $root = $this->mockValidRoot($value);
        $this->assertEquals($expected, XslTokenParser::parse($value, $root, new ColumnWidth())->evaluate());
    }

    #[DataProviderExternal(ProportionalColumnWidthFunctionDataProvider::class, 'invalidDataProvider')]
    public function test_validation_with_invalid_values(string $value, string $expected, ?string $exceptionClass): void
    {
        if ($exceptionClass !== null) {
            $this->expectException($exceptionClass);
        }
        XslTokenParser::make();
        $root = $this->mockValidRoot($value);
        $this->assertNotEquals($expected, XslTokenParser::parse($value, $root, new ColumnWidth())->evaluate());
    }

    #[DataProviderExternal(ProportionalColumnWidthFunctionDataProvider::class, 'validDataProvider')]
    public function test_validation_with_invalid_root1(string $value, string $expected): void
    {
        $this->expectException(InvalidAttributeValueParseException::class);

        XslTokenParser::make();
        $root = $this->mockInvalidRoot1($value);
        $this->assertEquals($expected, XslTokenParser::parse($value, $root, new ColumnWidth())->evaluate());
    }

    #[DataProviderExternal(ProportionalColumnWidthFunctionDataProvider::class, 'validDataProvider')]
    public function test_validation_with_invalid_root2(string $value, string $expected): void
    {
        $this->expectException(InvalidAttributeValueParseException::class);

        XslTokenParser::make();
        $root = $this->mockInvalidRoot2($value);
        $this->assertEquals($expected, XslTokenParser::parse($value, $root, new ColumnWidth())->evaluate());
    }

    #[DataProviderExternal(ProportionalColumnWidthFunctionDataProvider::class, 'validDataProvider')]
    public function test_validation_with_invalid_root3(string $value, string $expected): void
    {
        $this->expectException(InvalidAttributeValueParseException::class);

        XslTokenParser::make();
        $root = $this->mockInvalidRoot3($value);
        $this->assertEquals($expected, XslTokenParser::parse($value, $root, new ColumnWidth())->evaluate());
    }

    private function mockValidRoot(string $value): Tag
    {
        (new Table())
            ->attribute(new XmlAttribute('table-layout', TableLayoutType::FIXED))
            ->child($mock = (new TableColumn())
                ->attribute(new XmlAttribute('column-width', $value)));

        return $mock;
    }

    private function mockInvalidRoot1(string $value): Tag
    {
        (new Table())
            ->attribute(new XmlAttribute('table-layout', TableLayoutType::AUTO))
            ->child($mock = (new TableColumn())
                ->attribute(new XmlAttribute('column-width', $value)));

        return $mock;
    }

    private function mockInvalidRoot2(string $value): Tag
    {
        $mock = (new TableColumn())
            ->attribute(new XmlAttribute('column-width', $value));

        return $mock;
    }

    private function mockInvalidRoot3(string $value): Tag
    {
        (new Table())
            ->attribute(new XmlAttribute('table-layout', TableLayoutType::AUTO))
            ->child((new TableColumn())
                ->child($mock = (new Block())
                    ->attribute(new XmlAttribute('column-width', $value))));

        return $mock;
    }
}
