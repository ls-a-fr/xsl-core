<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Fop\Types;

use Lsa\Xml\Utils\Xml\XmlComparator;
use Lsa\Xsl\Core\Tests\Fop\CommonMethodsFop;

final class ForcePageCountTypeTest extends CommonMethodsFop
{
    public function test_schema(): void
    {
        $comparator = new XmlComparator(XmlComparator::VALIDATION_STRICT | XmlComparator::VALIDATION_SWAPPABLE_ATTRIBUTE_VALUES);
        $xsd = self::$xsdElement->xpath('/x:schema/x:simpleType[@name="force_page_count_Type"]');
        $fop = self::$fopElement->xpath('/x:schema/x:simpleType[@name="force_page_count_Type"]');

        $this->assertNotEmpty($xsd);
        $this->assertNotEmpty($fop);

        $result = $comparator->compareNodes($fop, $xsd);
        $this->assertTrue($result, implode("\n", $comparator->getErrors()));
    }
}
