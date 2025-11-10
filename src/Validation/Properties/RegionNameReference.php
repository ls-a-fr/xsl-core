<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Validation\Types\RegionNameReferenceType;

/**
 * XSL Definition:
 * - Value:  <name>
 * - Initial:  none, value required
 * - Inherited:  no
 * - Percentages:  N/A
 * - Media:  all
 *
 * Specifies a flow to be used within a sequence of regions in the flow-target-list of a particular
 * assignment of flows to regions.
 *
 * @link https://www.w3.org/TR/xsl11/#region-name-reference
 */
class RegionNameReference extends TypedAttribute
{
    public function __construct()
    {
        parent::__construct('region-name-reference', RegionNameReferenceType::class);
    }
}
