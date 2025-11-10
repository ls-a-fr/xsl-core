<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\FlowNameType;

/**
 * XSL Definition:
 * - Value:  `<name>`
 * - Initial:  an empty name
 * - Inherited:  no, a value is required
 * - Percentages:  N/A
 * - Media:  all
 *
 * Defines the name of the flow.
 *
 * The flow-name and region-name are used to assign the flow's content (or static-content's content) to a
 * specific region or series of regions in the layout. In XSL this is done by specifying the name of the
 * target region as the flow-name. (For example, text placed in the region-body would specify
 * flow-name="xsl-region-body".)
 *
 * @link https://www.w3.org/TR/xsl11/#flow-name
 */
class FlowName extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('flow-name', FlowNameType::class);
    }

    public function getDefaultValue(): string
    {
        return '';
    }
}
