<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\BorderCollapseType;

/**
 * CSS2 Definition:
 * - Value:  collapse | collapse-with-precedence | separate | inherit
 * - Initial:  collapse
 * - Inherited:  yes
 * - Percentages:  N/A
 * - Media:  visual
 *
 * This property selects a table's border model. The value "separate" selects the separated borders
 * border model. The value "collapse" selects the collapsing borders model.
 *
 * XSL modifications to the CSS definition:
 * - XSL adds the following value: collapse-with-precedence
 *
 * @link https://www.w3.org/TR/xsl11/#border-collapse
 */
class BorderCollapse extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('border-collapse', BorderCollapseType::class);
    }

    public function getDefaultValue(): string
    {
        return BorderCollapseType::COLLAPSE;
    }
}
