<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xml\Utils\Validation\Xml\StringType;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;

/**
 * XSL Definition:
 * - Value:  `<string>`
 * - Initial:  1
 * - Inherited:  no
 * - Percentages:  N/A
 * - Media:  all
 *
 * This property is defined in [XSLT]: Number to String Conversion Attributes.
 *
 * @link https://www.w3.org/TR/xsl11/#format
 * @link https://www.w3.org/TR/xsl11/#XSLT
 */
class Format extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('format', StringType::class);
    }

    public function getDefaultValue(): string
    {
        return '1';
    }
}
