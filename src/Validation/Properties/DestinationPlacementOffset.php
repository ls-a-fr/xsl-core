<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\Xsl\LengthType;

/**
 * XSL Definition:
 * - Value:  `<length>`
 * - Initial:  0pt
 * - Inherited:  no
 * - Percentages:  N/A
 * - Media:  interactive
 *
 * The "destination-placement-offset" property specifies the distance from the beginning (top) of
 * the page to the innermost line-area that contains the first destination area. If the first
 * destination area is not contained in a line-area, the "destination-placement-offset" property
 * instead directly specifies the distance to the top of the destination area.
 *
 * If the specification of destination-placement-offset would result in a distance longer than
 * the distance from the start of the document, the distance from the start of the document
 * should be used.
 *
 * If the specified distance would push the first destination area below the page-area, the
 * distance should be decreased so the whole first destination area becomes visible, if possible.
 * If the first destination area is higher than the page, the top of the area should be aligned
 * with the top of the page.
 *
 * @link https://www.w3.org/TR/xsl11/#destination-placement-offset
 */
class DestinationPlacementOffset extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('destination-placement-offset', LengthType::class);
    }

    public function getDefaultValue(): string
    {
        return '0pt';
    }
}
