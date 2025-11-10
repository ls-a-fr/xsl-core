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
use Lsa\Xsl\Core\Tags\List\ListBlock;
use Lsa\Xsl\Core\Tags\List\ListItem;
use Lsa\Xsl\Core\Tags\List\ListItemBody;
use Lsa\Xsl\Core\Tags\List\ListItemLabel;
use PHPUnit\Framework\TestCase;

final class Doc2Test extends TestCase
{
    private static ExtendedXMLElement $doc;

    public static function setUpBeforeClass(): void
    {
        self::$doc = new ExtendedXMLElement(file_get_contents(__DIR__.'/../docs/doc2.xml'));
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
                        new Attribute('master-name', 'onecol'),
                        new Attribute('page-width', '21cm'),
                        new Attribute('page-height', '29.7cm'),
                        new Attribute('margin', '1.5cm'),
                    ])
                    ->child((new RegionBody())
                        ->attribute(new Attribute('margin-top', '2cm')))
                ))
            ->child((new PageSequence())
                ->attribute(new Attribute('master-reference', 'onecol'))
                ->child((new Flow())
                    ->attribute(new Attribute('flow-name', 'xsl-region-body'))
                    ->child((new Block())
                        ->attribute(new Attribute('font-size', '10pt'))
                        ->content('Couleurs de base :')
                    )
                    ->child((new ListBlock())
                        ->attribute(new Attribute('provisional-distance-between-starts', '1cm'))
                        ->child((new ListItem())
                            ->child((new ListItemLabel())
                                ->attribute(new Attribute('end-indent', 'label-end()'))
                                ->child((new Block())->content('•')))
                            ->child((new ListItemBody())
                                ->attribute(new Attribute('start-indent', 'body-start()'))
                                ->child((new Block())->content('Rouge'))))
                        ->child((new ListItem())
                            ->child((new ListItemLabel())
                                ->attribute(new Attribute('end-indent', 'label-end()'))
                                ->child((new Block())->content('•')))
                            ->child((new ListItemBody())
                                ->attribute(new Attribute('start-indent', 'body-start()'))
                                ->child((new Block())->content('Vert'))))
                        ->child((new ListItem())
                            ->child((new ListItemLabel())
                                ->attribute(new Attribute('end-indent', 'label-end()'))
                                ->child((new Block())->content('•')))
                            ->child((new ListItemBody())
                                ->attribute(new Attribute('start-indent', 'body-start()'))
                                ->child((new Block())->content('Bleu'))))
                    )
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
