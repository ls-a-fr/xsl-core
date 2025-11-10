<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Validation\Types\FlowMapNameType;

/**
 * XSL Definition:
 * - Value:  `<name>`
 * - Initial:  none, a value is required
 * - Inherited:  no
 * - Percentages:  N/A
 * - Media:  all
 *
 * Names identify flow-maps. They may not be empty and must be unique.
 *
 * This property provides an identifying name for an fo:flow-map, which is subsequently referenced as the
 * value of the flow-map-reference property on an fo:page-sequence.
 *
 * @link https://www.w3.org/TR/xsl11/#flow-map-name
 */
class FlowMapName extends TypedAttribute
{
    public function __construct()
    {
        parent::__construct('flow-map-name', FlowMapNameType::class);
    }
}
