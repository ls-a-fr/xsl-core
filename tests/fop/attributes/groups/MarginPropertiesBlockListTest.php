<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Fop\Attributes\Groups;

use Lsa\Xml\Utils\Xml\XmlComparator;
use Lsa\Xsl\Core\Tests\Fop\CommonMethodsFop;

final class MarginPropertiesBlockListTest extends CommonMethodsFop
{
    public function test_schema(): void
    {
        $comparator = new XmlComparator(XmlComparator::VALIDATION_STRICT);
        $xsd = self::$xsdElement->xpath('/x:schema/x:attributeGroup[@name="Margin_Properties_Block_List"]');
        $fop = self::$fopElement->xpath('/x:schema/x:attributeGroup[@name="Margin_Properties_Block_List"]');

        $this->assertNotEmpty($xsd);
        $this->assertNotEmpty($fop);

        $result = $comparator->compareNodes($fop, $xsd);
        $this->assertTrue($result, implode("\n", $comparator->getErrors()));
    }
}
