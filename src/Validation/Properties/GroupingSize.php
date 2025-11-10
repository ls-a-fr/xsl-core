<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\Xsl\NumberType;

/**
 * XSL Definition:
 * - Value:  `<number>`
 * - Initial:  no grouping
 * - Inherited:  no
 * - Percentages:  N/A
 * - Media:  all
 *
 * This property is defined in [XSLT]: Number to String Conversion Attributes.
 *
 * @see https://www.w3.org/TR/xsl11/#grouping-separator
 * @see https://www.w3.org/TR/xsl11/#XSLT
 * @see https://www.w3.org/TR/xslt-30/#convert
 */
class GroupingSize extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('grouping-size', NumberType::class);
    }

    public function getDefaultValue(): string
    {
        return '0';
    }
}
