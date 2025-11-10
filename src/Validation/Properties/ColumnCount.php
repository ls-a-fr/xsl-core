<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\ColumnCountType;

/**
 * XSL Definition:
 * Value:   <number> | inherit
 * Initial:     1
 * Inherited:   no
 * Percentages:     N/A
 * Media:   visual
 *
 * Specifies the number of columns in the region.
 * A value of 1 indicates that this is not a multi-column region.
 */
class ColumnCount extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('column-count', ColumnCountType::class);
    }

    public function getDefaultValue(): string
    {
        return '1';
    }
}
