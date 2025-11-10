<?php

declare(strict_types=1);
require_once __DIR__.'/../../../vendor/autoload.php';

use Lsa\Xml\Utils\Xml\Attribute;
use Lsa\Xml\Utils\Xml\ExtendedXMLElement;
use Lsa\Xml\Utils\Xml\XmlComparator;
use Lsa\Xml\Utils\Xml\XmlDocument;
use Lsa\Xml\Utils\Xml\XmlNamespace;
use Lsa\Xsl\Core\Tags\Block\Block;
use Lsa\Xsl\Core\Tags\Layout\Flow;
use Lsa\Xsl\Core\Tags\Layout\LayoutMasterSet;
use Lsa\Xsl\Core\Tags\Layout\PageSequence;
use Lsa\Xsl\Core\Tags\Layout\RegionAfter;
use Lsa\Xsl\Core\Tags\Layout\RegionBody;
use Lsa\Xsl\Core\Tags\Layout\Root;
use Lsa\Xsl\Core\Tags\Layout\SimplePageMaster;
use Lsa\Xsl\Core\Tags\Layout\StaticContent;
use PHPUnit\Framework\TestCase;

final class Doc4Test extends TestCase
{
    private static ExtendedXMLElement $doc;

    public static function setUpBeforeClass(): void
    {
        self::$doc = new ExtendedXMLElement(file_get_contents(__DIR__.'/../docs/doc4.xml'));
    }

    public function test_is_similar()
    {
        $foNamespace = new XmlNamespace('fo', 'http://www.w3.org/1999/XSL/Format');

        $generatedDocument = new XmlDocument();
        $generatedDocument->setGlobalNamespace($foNamespace);
        $root = (new Root())
            ->namespace($foNamespace)
            ->child((new LayoutMasterSet())
                ->child((new SimplePageMaster())
                    ->attributes([
                        new Attribute('master-name', 'two-regions'),
                        new Attribute('page-width', '21cm'),
                        new Attribute('page-height', '29.7cm'),
                        new Attribute('margin', '2cm'),
                    ])
                    ->child((new RegionBody()))
                    ->child((new RegionAfter())
                        ->attribute(new Attribute('extent', '1.5cm')))
                ))
            ->child((new PageSequence())
                ->attribute(new Attribute('master-reference', 'two-regions'))
                ->child((new Flow())
                    ->attribute(new Attribute('flow-name', 'xsl-region-body'))
                    ->child((new Block())
                        ->attribute(new Attribute('font-family', 'serif'))
                        ->attribute(new Attribute('font-size', '11pt'))
                        ->content('Un fichier XSL-FO commence par une racine contenant des modèles de pages et des séquences de pages.'))
                )
                ->child((new StaticContent())
                    ->attribute(new Attribute('flow-name', 'xsl-region-after'))
                    ->child((new Block())
                        ->attribute(new Attribute('font-size', '8pt'))
                        ->attribute(new Attribute('text-align', 'center'))
                        ->content('Pied de page statique')))
            );

        $this->assertTrue($root->validate(), implode("\n", $root->validator->getErrors()));

        $generatedDocument->addChild($root);
        $generatedContents = $generatedDocument->getContents();
        $generatedXmlElement = new ExtendedXMLElement($generatedContents);

        $comparator = new XmlComparator(XmlComparator::VALIDATION_STRICT);
        $docRoot = self::$doc->xpath('/fo:root');
        $generatedRoot = $generatedXmlElement->xpath('/fo:root');

        $this->assertNotEmpty($docRoot);
        $this->assertNotEmpty($generatedRoot);

        $result = $comparator->compareNodes($docRoot, $generatedRoot);
        $this->assertTrue($result, implode("\n", $comparator->getErrors()));
    }
}
