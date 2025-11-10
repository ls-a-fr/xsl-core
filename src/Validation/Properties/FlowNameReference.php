<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Validation\Types\FlowNameReferenceType;

/**
 * XSL Definition:
 * - Value:  `<name>`
 * - Initial:  none, a value is required
 * - Inherited:  no
 * - Percentages:  N/A
 * - Media:  all
 *
 * Specifies a flow to be used within a sequence of flows in the flow-source-list of a particular assignment
 * of flows to regions.
 *
 * @link https://www.w3.org/TR/xsl11/#flow-name-reference
 */
class FlowNameReference extends TypedAttribute
{
    public function __construct()
    {
        parent::__construct('flow-name-reference', FlowNameReferenceType::class);
    }
}
