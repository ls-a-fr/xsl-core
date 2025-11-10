<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Xsl\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xml\Utils\Xml\Attribute as XmlAttribute;
use Lsa\Xml\Utils\Xml\Base\Tag;
use Lsa\Xsl\Core\Exceptions\InvalidAttributeValueParseException;
use Lsa\Xsl\Core\Tags\Block\Block;
use Lsa\Xsl\Core\Tags\Layout\Flow;
use Lsa\Xsl\Core\Tags\Layout\LayoutMasterSet;
use Lsa\Xsl\Core\Tags\Layout\PageSequence;
use Lsa\Xsl\Core\Tags\Layout\PageSequenceMaster;
use Lsa\Xsl\Core\Tags\Layout\RegionBefore;
use Lsa\Xsl\Core\Tags\Layout\RegionBody;
use Lsa\Xsl\Core\Tags\Layout\RepeatablePageMasterReference;
use Lsa\Xsl\Core\Tags\Layout\Root;
use Lsa\Xsl\Core\Tags\Layout\SimplePageMaster;
use Lsa\Xsl\Core\Tests\Common\CommonMethods;
use Lsa\Xsl\Core\Tests\Providers\FromMasterPageRegionFunctionDataProvider;
use Lsa\Xsl\Core\Tokenizer\Computing\XslTokenParser;
use PHPUnit\Framework\Attributes\DataProviderExternal;

final class FromPageMasterRegionFunctionTest extends CommonMethods
{
    #[DataProviderExternal(FromMasterPageRegionFunctionDataProvider::class, 'validDataProvider')]
    public function test_validation_with_valid_values(TypedAttribute $attribute, string $value, string $expected): void
    {
        XslTokenParser::make();
        $root = $this->mockValidRoot($attribute, $value);
        $this->assertEquals($expected, XslTokenParser::parse($value, $root, $attribute)->evaluate());
    }

    #[DataProviderExternal(FromMasterPageRegionFunctionDataProvider::class, 'invalidDataProvider')]
    public function test_validation_with_invalid_values(TypedAttribute $attribute, string $value, string $expected, ?string $exceptionClass): void
    {
        if ($exceptionClass !== null) {
            $this->expectException($exceptionClass);
        }
        XslTokenParser::make();
        $root = $this->mockValidRoot($attribute, $value);
        $this->assertNotEquals($expected, XslTokenParser::parse($value, $root, $attribute)->evaluate());
    }

    #[DataProviderExternal(FromMasterPageRegionFunctionDataProvider::class, 'validDataProvider')]
    public function test_validation_with_invalid_root1(TypedAttribute $attribute, string $value, string $expected): void
    {
        $this->expectException(InvalidAttributeValueParseException::class);

        XslTokenParser::make();
        $root = $this->mockInvalidRoot1($attribute, $value);
        $this->assertEquals($expected, XslTokenParser::parse($value, $root, $attribute)->evaluate());
    }

    #[DataProviderExternal(FromMasterPageRegionFunctionDataProvider::class, 'validDataProvider')]
    public function test_validation_with_invalid_root2(TypedAttribute $attribute, string $value, string $expected): void
    {
        $this->expectException(InvalidAttributeValueParseException::class);

        XslTokenParser::make();
        $root = $this->mockInvalidRoot2($attribute, $value);
        $this->assertEquals($expected, XslTokenParser::parse($value, $root, $attribute)->evaluate());
    }

    private function mockValidRoot(TypedAttribute $attribute, string $value): Tag
    {
        // Based on XSL-FO specification example
        (new Root())
            ->child((new LayoutMasterSet())
                ->child((new SimplePageMaster()))
                ->attribute(new XmlAttribute('master-name', 'all-pages'))
                ->child((new RegionBody())
                    ->attribute(new XmlAttribute('region-name', 'xsl-region-body'))
                    ->attribute(new XmlAttribute('margin', '0.75in'))
                    ->attribute(new XmlAttribute('writing-mode', 'tb-lr'))
                    // Added reference-orientation
                    ->attribute(new XmlAttribute('reference-orientation', '180deg')))
                        // End addition
                ->child((new RegionBefore())
                    ->attribute(new XmlAttribute('region-name', 'xsl-region-before'))
                    ->attribute(new XmlAttribute('extent', '0.75in')))
                ->child((new PageSequenceMaster())
                    ->attribute(new XmlAttribute('master-name', 'default-sequence'))
                    ->child((new RepeatablePageMasterReference())
                        ->attribute(new XmlAttribute('master-reference', 'all-pages')))))
            ->child($mock = (new PageSequence())
                ->attribute(new XmlAttribute('master-name', 'default-sequence'))
                ->attribute(new XmlAttribute($attribute->name, $value))
                ->child((new Flow())
                    ->attribute(new XmlAttribute('flow-name', 'xsl-region-body'))
                    ->child((new Block())
                        ->content('[Content in a language which allows either
                        horizontal or vertical formatting]'))));

        return $mock;
    }

    private function mockInvalidRoot1(TypedAttribute $attribute, string $value): Tag
    {
        // Two identical master-names
        (new Root())
            ->child((new LayoutMasterSet())
                ->child((new SimplePageMaster()))
                ->attribute(new XmlAttribute('master-name', 'all-pages'))
                ->child((new RegionBody())
                    ->attribute(new XmlAttribute('region-name', 'xsl-region-body'))
                    ->attribute(new XmlAttribute('margin', '0.75in'))
                    ->attribute(new XmlAttribute('writing-mode', 'tb-lr'))
                    // Added reference-orientation
                    ->attribute(new XmlAttribute('reference-orientation', '180deg')))
                        // End addition
                ->child((new RegionBefore())
                    ->attribute(new XmlAttribute('region-name', 'xsl-region-before'))
                    ->attribute(new XmlAttribute('extent', '0.75in')))
                ->child((new PageSequenceMaster())
                    ->attribute(new XmlAttribute('master-name', 'all-pages'))
                    ->child((new RepeatablePageMasterReference())
                        ->attribute(new XmlAttribute('master-reference', 'all-pages')))))
            ->child($mock = (new PageSequence())
                ->attribute(new XmlAttribute('master-name', 'default-sequence'))
                ->attribute(new XmlAttribute($attribute->name, $value))
                ->child((new Flow())
                    ->attribute(new XmlAttribute('flow-name', 'xsl-region-body'))
                    ->child((new Block())
                        ->content('[Content in a language which allows either
                        horizontal or vertical formatting]'))));

        return $mock;
    }

    private function mockInvalidRoot2(TypedAttribute $attribute, string $value): Tag
    {
        // No match for master-name
        (new Root())
            ->child((new LayoutMasterSet())
                ->child((new SimplePageMaster()))
                ->attribute(new XmlAttribute('master-name', 'another-master-name'))
                ->child((new RegionBody())
                    ->attribute(new XmlAttribute('region-name', 'xsl-region-body'))
                    ->attribute(new XmlAttribute('margin', '0.75in'))
                    ->attribute(new XmlAttribute('writing-mode', 'tb-lr'))
                    // Added reference-orientation
                    ->attribute(new XmlAttribute('reference-orientation', '180deg')))
                        // End addition
                ->child((new RegionBefore())
                    ->attribute(new XmlAttribute('region-name', 'xsl-region-before'))
                    ->attribute(new XmlAttribute('extent', '0.75in')))
                ->child((new PageSequenceMaster())
                    ->attribute(new XmlAttribute('master-name', 'all-pages'))
                    ->child((new RepeatablePageMasterReference())
                        ->attribute(new XmlAttribute('master-reference', 'all-pages')))))
            ->child($mock = (new PageSequence())
                ->attribute(new XmlAttribute('master-name', 'default-sequence'))
                ->attribute(new XmlAttribute($attribute->name, $value))
                ->child((new Flow())
                    ->attribute(new XmlAttribute('flow-name', 'xsl-region-body'))
                    ->child((new Block())
                        ->content('[Content in a language which allows either
                        horizontal or vertical formatting]'))));

        return $mock;
    }
}
