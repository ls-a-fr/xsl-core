<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Fop\Tags\Groups;

use Lsa\Xml\Utils\Xml\XmlComparator;
use Lsa\Xsl\Core\Tests\Fop\CommonMethodsFop;

final class InitialPropertySetListTest extends CommonMethodsFop
{
    public function test_schema(): void
    {
        $comparator = new XmlComparator(XmlComparator::VALIDATION_STRICT);
        $xsd = self::$xsdElement->xpath('/x:schema/x:group[@name="initial_property_set_List"]');
        $fop = self::$fopElement->xpath('/x:schema/x:group[@name="initial_property_set_List"]');

        $this->assertNotEmpty($xsd);
        $this->assertNotEmpty($fop);

        $result = $comparator->compareNodes($fop, $xsd);
        $this->assertTrue($result, implode("\n", $comparator->getErrors()));
    }
}
