<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\RetrieveClassNameType;

/**
 * XSL Definition:
 * - Value:  `<name>`
 * - Initial:  an empty name
 * - Inherited:  no, a value is required
 * - Percentages:  N/A
 * - Media:  paged
 *
 * This property constrains that the fo:marker whose children are retrieved by the fo:retrieve-marker or
 * fo:retrieve-table-marker must have a "marker-class-name" property value that is the same as the value of
 * this property.
 *
 * @link https://www.w3.org/TR/xsl11/#retrieve-class-name
 */
class RetrieveClassName extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('retrieve-class-name', RetrieveClassNameType::class);
    }

    public function getDefaultValue(): string
    {
        return '';
    }
}
