<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tags\Table;

use Lsa\Xsl\Core\Traits\BasicAuralConformance;
use Lsa\Xsl\Core\Traits\BasicVisualConformance;
use Lsa\Xsl\Core\Validation\Tags\TableHeader as ValidateTableHeader;
use Lsa\Xsl\Core\Xml\Tag;

/**
 * The fo:table-header formatting object is used to contain the content of the table header.
 *
 * Areas:
 * The fo:table-header formatting object does not generate any areas. The fo:table-header formatting object
 * returns the sequence of areas created by concatenating the sequences of areas returned by each of the
 * children of the fo:table-header.
 *
 * Constraints:
 * The order of concatenation of the sequences of areas returned by the children of the fo:table-header is the
 * same order as the children are ordered under the fo:table-header.
 *
 * Contents:
 * (table-row+|table-cell+)
 *
 * The fo:table-header has fo:table-row (one or more) as its children, or alternatively fo:table-cell (one or
 * more). In the latter case cells are grouped into rows using the starts-row and ends-row properties.
 * In addition this formatting object may have a sequence of zero or more fo:markers as its initial children.
 *
 * @see https://www.w3.org/TR/xsl11/#fo_table-header
 */
class TableHeader extends Tag
{
    use BasicAuralConformance;
    use BasicVisualConformance;
    use ValidateTableHeader;
}
