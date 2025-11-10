<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Fop\Tags;

use Lsa\Xml\Utils\Xml\XmlComparator;
use Lsa\Xsl\Core\Tags\Inline\Character;
use Lsa\Xsl\Core\Tests\Fop\CommonMethodsFop;
use Lsa\Xsl\Core\Xsd\Fop\FopProfile;

final class CharacterTest extends CommonMethodsFop
{
    public function test_schema(): void
    {
        $comparator = new XmlComparator(XmlComparator::VALIDATION_STRICT);
        $xsd = self::$xsdElement->xpath('/x:schema/x:element[@name="character"]');
        $fop = self::$fopElement->xpath('/x:schema/x:element[@name="character"]');

        $this->assertNotEmpty($xsd);
        $this->assertNotEmpty($fop);

        $result = $comparator->compareNodes($fop, $xsd);
        $this->assertTrue($result, implode("\n", $comparator->getErrors()));
    }

    public function test_attributes(): void
    {
        $tag1 = (new Character())->asDefinition();
        $tag2 = (new FopProfile())->check(new Character())->asDefinition();

        $this->assertEqualsCanonicalizing($this->flattenAttributeNames($tag1), $this->flattenAttributeNames($tag2));
    }
}
