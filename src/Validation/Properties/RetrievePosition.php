<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\RetrievePositionType;

/**
 * XSL Definition:
 * - Value:  first-starting-within-page | first-including-carryover | last-starting-within-page |
 *     last-ending-within-page
 * - Initial:  first-starting-within-page
 * - Inherited:  no
 * - Percentages:  N/A
 * - Media:  paged
 *
 * The term "containing page" is used here to mean the page that contains the first area generated or
 * returned by the children of the retrieved fo:marker.
 *
 * This property specifies the preference for which fo:marker's children shall be retrieved by an
 * fo:retrieve-marker, based on the areas returned by the parent of the fo:marker relative to the areas
 * returned by the parents of other identically named fo:marker's.
 *
 * @link https://www.w3.org/TR/xsl11/#retrieve-position
 */
class RetrievePosition extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('retrieve-position', RetrievePositionType::class);
    }

    public function getDefaultValue(): string
    {
        return RetrievePositionType::FIRST_STARTING_WITHIN_PAGE;
    }
}
