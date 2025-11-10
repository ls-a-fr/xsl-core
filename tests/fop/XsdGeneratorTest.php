<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Fop;

use Lsa\Xml\Utils\Xml\ExtendedXMLElement;
use Lsa\Xml\Utils\Xml\XmlComparator;
use PHPUnit\Framework\TestCase;

final class XsdGeneratorTest extends TestCase
{
    private static ExtendedXMLElement $xsdElement;

    private static ExtendedXMLElement $fopElement;

    public static function setUpBeforeClass(): void
    {
        self::$xsdElement = new ExtendedXMLElement(file_get_contents(__DIR__.'/xsd/generated-fop.xsd'));
        self::$fopElement = new ExtendedXMLElement(file_get_contents(__DIR__.'/xsd/fop.xsd'));

        self::$xsdElement->applyNamespaces();
        self::$fopElement->applyNamespaces();
    }

    public function test_creates_valid_xsd(): void
    {
        $valid = true;

        self::$xsdElement->rewind(); // Retour au premier élément
        while (self::$xsdElement->next()) {
            $valid &= ! self::$xsdElement->valid();
        }
        self::$xsdElement->rewind(); // Retour au premier élément

        $this->assertTrue($valid);
    }

    public function test_tag_groups_compliance(): void
    {
        $comparator = new XmlComparator(XmlComparator::VALIDATION_STRICT);
        $xsd = self::$xsdElement->xpath('/x:schema/x:group');
        $fop = self::$fopElement->xpath('/x:schema/x:group');

        $result = $comparator->compareNodes($fop, $xsd);
        $this->assertTrue($result, implode("\n", $comparator->getErrors()));
    }

    public function test_attribute_groups_compliance(): void
    {
        $comparator = new XmlComparator(XmlComparator::VALIDATION_STRICT);
        $xsd = self::$xsdElement->xpath('/x:schema/x:attributeGroup');
        $fop = self::$fopElement->xpath('/x:schema/x:attributeGroup');

        $result = $comparator->compareNodes($fop, $xsd);
        $this->assertTrue($result, implode("\n", $comparator->getErrors()));
    }

    public function test_simple_types_compliance(): void
    {
        $comparator = new XmlComparator(XmlComparator::VALIDATION_SWAPPABLE_ATTRIBUTE_VALUES | XmlComparator::VALIDATION_STRICT);
        $xsd = self::$xsdElement->xpath('/x:schema/x:simpleType');
        $fop = self::$fopElement->xpath('/x:schema/x:simpleType');

        $result = $comparator->compareNodes($fop, $xsd);
        $this->assertTrue($result, implode("\n", $comparator->getErrors()));
    }
}
