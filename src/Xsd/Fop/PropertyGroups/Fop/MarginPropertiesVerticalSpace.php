<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\Fop;

use Lsa\Xml\Utils\Traits\HasName;
use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Xsd\Fop\Types\SpaceAfterOptimumType;
use Lsa\Xsl\Core\Xsd\Fop\Types\SpaceBeforeOptimumType;

/**
 * This class is used to validate against fop.xsd file.
 */
class MarginPropertiesVerticalSpace extends AttributeGroup
{
    use HasName;

    public function __construct()
    {
        $this->name = 'Margin_Properties_vertical_Space_List_FOP';
        parent::__construct([
            new TypedAttribute('space-before.optimum', SpaceBeforeOptimumType::class),
            new TypedAttribute('space-after.optimum', SpaceAfterOptimumType::class),
        ]);
    }
}
