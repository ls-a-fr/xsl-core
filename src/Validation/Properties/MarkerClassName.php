<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xml\Utils\Validation\Xml\NcNameType;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;

/**
 * XSL Definition:
 * - Value:  `<name>`
 * - Initial:  an empty name
 * Inherited:  no, a value is required
 * Percentages:  N/A
 * Media:  paged
 *
 * This property identifies the fo:marker as being in a group with others that have the same name, each of
 * which becomes a candidate to be retrieved by an fo:retrieve-marker or fo:retrieve-table-marker that has
 * a "retrieve-class-name" property of the same value.
 *
 * Names used as identifiers must be unique among fo:markers that are (conceptually) attached to the same
 * area.
 * If the name is empty or if a name-conflict is encountered, an error shall be reported. A processor may
 * then continue processing.
 */
class MarkerClassName extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('marker-class-name', NcNameType::class);
    }

    public function getDefaultValue(): string
    {
        return '';
    }
}
