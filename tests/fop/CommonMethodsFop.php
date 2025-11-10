<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Fop;

use Lsa\Xml\Utils\Xml\ExtendedXMLElement;
use Lsa\Xsl\Core\Tests\Common\CommonMethods;

abstract class CommonMethodsFop extends CommonMethods
{
    protected static ExtendedXMLElement $xsdElement;

    protected static ExtendedXMLElement $fopElement;

    public static function setUpBeforeClass(): void
    {
        self::$xsdElement = new ExtendedXMLElement(file_get_contents(__DIR__.'/xsd/generated-fop.xsd'));
        self::$fopElement = new ExtendedXMLElement(file_get_contents(__DIR__.'/xsd/fop.xsd'));

        self::$xsdElement->applyNamespaces();
        self::$fopElement->applyNamespaces();
    }
}
