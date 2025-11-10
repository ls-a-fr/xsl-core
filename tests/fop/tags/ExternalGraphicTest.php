<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Fop\Tags;

use Lsa\Xml\Utils\Xml\XmlComparator;
use Lsa\Xsl\Core\Tags\Inline\ExternalGraphic;
use Lsa\Xsl\Core\Tests\Fop\CommonMethodsFop;
use Lsa\Xsl\Core\Xsd\Fop\FopProfile;

final class ExternalGraphicTest extends CommonMethodsFop
{
    public function test_schema(): void
    {
        $comparator = new XmlComparator(XmlComparator::VALIDATION_STRICT);
        $xsd = self::$xsdElement->xpath('/x:schema/x:element[@name="external-graphic"]');
        $fop = self::$fopElement->xpath('/x:schema/x:element[@name="external-graphic"]');

        $this->assertNotEmpty($xsd);
        $this->assertNotEmpty($fop);

        $result = $comparator->compareNodes($fop, $xsd);
        $this->assertTrue($result, implode("\n", $comparator->getErrors()));
    }

    public function test_attributes(): void
    {
        $tag1 = (new ExternalGraphic())->asDefinition();
        $tag2 = (new FopProfile())->check(new ExternalGraphic())->asDefinition();

        $this->assertEqualsCanonicalizing($this->flattenAttributeNames($tag1), $this->flattenAttributeNames($tag2));
    }
}
