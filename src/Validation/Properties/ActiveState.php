<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Validation\Types\ActiveStateType;

/**
 * XSL Definition:
 * - Value:  link | visited | active | hover | focus
 * - Initial:  no, a value is required
 * - Inherited:  no
 * - Percentages:  N/A
 * - Media:  interactive
 *
 * The "active-state" property is used to control which of the fo:multi-property-sets are used to format
 * the child flow objects within an fo:multi-properties formatting object. The states (or at least the
 * events that cause the state to be entered) are defined by the DOM.
 *
 * @link https://www.w3.org/TR/xsl11/#active-state
 */
class ActiveState extends TypedAttribute
{
    public function __construct()
    {
        parent::__construct('active-state', ActiveStateType::class);
    }
}
