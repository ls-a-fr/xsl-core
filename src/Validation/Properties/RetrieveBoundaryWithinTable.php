<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\RetrieveBoundaryWithinTableType;

/**
 * XSL Definition:
 * - Value:  table | table-fragment | page
 * - Initial:  table
 * - Inherited:  no
 * - Percentages:  N/A
 * - Media:  paged
 *
 * Note:
 * The terms defined in 6.13.7 fo:retrieve-table-marker are used here.
 *
 * @link https://www.w3.org/TR/xsl11/#retrieve-boundary-within-table
 * @link https://www.w3.org/TR/xsl11/#fo_retrieve-table-marker
 */
class RetrieveBoundaryWithinTable extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('retrieve-boundary-within-table', RetrieveBoundaryWithinTableType::class);
    }

    public function getDefaultValue(): string
    {
        return RetrieveBoundaryWithinTableType::TABLE;
    }
}
