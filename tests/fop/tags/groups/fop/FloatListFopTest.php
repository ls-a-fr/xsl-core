<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Fop\Tags\Groups\Fop;

use Lsa\Xml\Utils\Xml\XmlComparator;
use Lsa\Xsl\Core\Tests\Fop\CommonMethodsFop;

final class FloatListFopTest extends CommonMethodsFop
{
    public function test_schema(): void
    {
        $comparator = new XmlComparator(XmlComparator::VALIDATION_STRICT);
        $xsd = self::$xsdElement->xpath('/x:schema/x:group[@name="float_List_FOP"]');
        $fop = self::$fopElement->xpath('/x:schema/x:group[@name="float_List_FOP"]');

        // This group is empty
        $this->assertEmpty($xsd);
        $this->assertEmpty($fop);

        $result = $comparator->compareNodes($fop, $xsd);
        $this->assertTrue($result, implode("\n", $comparator->getErrors()));
    }
}
