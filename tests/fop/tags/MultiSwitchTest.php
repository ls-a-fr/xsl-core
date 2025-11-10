<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Fop\Tags;

use Lsa\Xml\Utils\Xml\XmlComparator;
use Lsa\Xsl\Core\Tags\Multi\MultiSwitch;
use Lsa\Xsl\Core\Tests\Fop\CommonMethodsFop;
use Lsa\Xsl\Core\Xsd\Fop\FopProfile;

final class MultiSwitchTest extends CommonMethodsFop
{
    public function test_schema(): void
    {
        $comparator = new XmlComparator(XmlComparator::VALIDATION_STRICT);
        $xsd = self::$xsdElement->xpath('/x:schema/x:element[@name="multi-switch"]');
        $fop = self::$fopElement->xpath('/x:schema/x:element[@name="multi-switch"]');

        $this->assertNotEmpty($xsd);
        $this->assertNotEmpty($fop);

        $result = $comparator->compareNodes($fop, $xsd);
        $this->assertTrue($result, implode("\n", $comparator->getErrors()));
    }

    public function test_attributes(): void
    {
        $tag1 = (new MultiSwitch())->asDefinition();
        $tag2 = (new FopProfile())->check(new MultiSwitch())->asDefinition();

        $this->assertEqualsCanonicalizing($this->flattenAttributeNames($tag1), $this->flattenAttributeNames($tag2));
    }
}
