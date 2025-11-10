<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Validation\Types\FlowMapReferenceType;

/**
 * XSL Definition:
 * - Value:  `<name>`
 * - Initial:  see prose
 * - Inherited:  no
 * - Percentages:  N/A
 * - Media:  all
 *
 * Specifies the flow map to be used for assigning flows to regions within the page-sequence.
 *
 * If no flow-map-reference is specified on a page-sequence, then the flow-map in effect is the implicit
 * flow-map specified in 6.4.5 fo:page-sequence.
 *
 * @link https://www.w3.org/TR/xsl11/#flow-map-reference
 * @link https://www.w3.org/TR/xsl11/#fo_page-sequence
 */
class FlowMapReference extends TypedAttribute
{
    public function __construct()
    {
        parent::__construct('flow-map-reference', FlowMapReferenceType::class);
    }
}
