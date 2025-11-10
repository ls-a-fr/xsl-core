<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Fop\Attributes\Groups\Fop;

use Lsa\Xml\Utils\Xml\XmlComparator;
use Lsa\Xsl\Core\Tests\Fop\CommonMethodsFop;

final class AbsoluteOrRelativePositionPropertiesListFopTest extends CommonMethodsFop
{
    public function test_schema(): void
    {
        $comparator = new XmlComparator(XmlComparator::VALIDATION_STRICT);
        $xsd = self::$xsdElement->xpath('/x:schema/x:attributeGroup[@name="absolute_or_Relative_Position_Properties_List_FOP"]');
        $fop = self::$fopElement->xpath('/x:schema/x:attributeGroup[@name="absolute_or_Relative_Position_Properties_List_FOP"]');

        $this->assertNotEmpty($xsd);
        $this->assertNotEmpty($fop);

        $result = $comparator->compareNodes($fop, $xsd);
        $this->assertTrue($result, implode("\n", $comparator->getErrors()));
    }
}
