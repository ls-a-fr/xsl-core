<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\RetrievePositionWithinTableType;

/**
 * XSL Definition:
 * - Value:  first-starting | first-including-carryover | last-starting | last-ending
 * - Initial:  first-starting
 * - Inherited:  no
 * - Percentages:  N/A
 * - Media:  paged
 *
 * Note:
 * The terms defined in 6.13.7 fo:retrieve-table-marker are used here.
 *
 * This property specifies the preference for which fo:marker's children shall be retrieved by an
 * fo:retrieve-table-marker, based on the areas returned by the parent of the fo:marker relative to the
 * areas returned by the parents of other identically named fo:marker's.
 *
 * @link https://www.w3.org/TR/xsl11/#retrieve-position-within-table
 * @link https://www.w3.org/TR/xsl11/#fo_retrieve-table-marker
 */
class RetrievePositionWithinTable extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('retrieve-position-within-table', RetrievePositionWithinTableType::class);
    }

    public function getDefaultValue(): string
    {
        return RetrievePositionWithinTableType::FIRST_STARTING;
    }
}
