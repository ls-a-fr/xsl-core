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
use Lsa\Xsl\Core\Tags\Layout\RegionBody;
use Lsa\Xsl\Core\Tags\Layout\Root;
use Lsa\Xsl\Core\Tags\Layout\SimplePageMaster;
use Lsa\Xsl\Core\Tags\Link\BasicLink;
use PHPUnit\Framework\TestCase;

final class Doc5Test extends TestCase
{
    private static ExtendedXMLElement $doc;

    public static function setUpBeforeClass(): void
    {
        self::$doc = new ExtendedXMLElement(file_get_contents(__DIR__.'/../docs/doc5.xml'));
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
                        new Attribute('master-name', 'margins'),
                        new Attribute('page-width', '21cm'),
                        new Attribute('page-height', '29.7cm'),
                        new Attribute('margin-top', '3cm'),
                        new Attribute('margin-bottom', '3cm'),
                        new Attribute('margin-left', '2cm'),
                        new Attribute('margin-right', '2cm'),
                    ])
                    ->child(new RegionBody())
                ))
            ->child((new PageSequence())
                ->attribute(new Attribute('master-reference', 'margins'))
                ->child((new Flow())
                    ->attribute(new Attribute('flow-name', 'xsl-region-body'))
                    ->child((new Block())
                        ->content('Exemple simple de mise en forme à marges personnalisées.'))
                    ->child((new Block())
                        ->content('XSL-FO est souvent utilisé pour générer des fichiers PDF.'))
                    ->child((new Block())
                        ->child((new BasicLink())
                            ->attribute(new Attribute('external-destination', "url('http://invalid.example.org')"))
                            ->content('Voir la page d\'information')))
                )
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
