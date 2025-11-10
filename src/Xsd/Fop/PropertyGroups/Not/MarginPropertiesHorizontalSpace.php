<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\Not;

use Lsa\Xml\Utils\Traits\HasName;
use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Validation\Types\SpaceEndType;
use Lsa\Xsl\Core\Validation\Types\SpaceStartType;
use Lsa\Xsl\Core\Validation\Types\Xsl\ConditionalityType;
use Lsa\Xsl\Core\Validation\Types\Xsl\LengthType;
use Lsa\Xsl\Core\Validation\Types\Xsl\SpacePrecedenceType;

/**
 * This class is used to validate against fop.xsd file.
 */
class MarginPropertiesHorizontalSpace extends AttributeGroup
{
    use HasName;

    public function __construct()
    {
        $this->name = 'Margin_Properties_Horizontal_Space_List_Not';
        parent::__construct([
            new TypedAttribute('space-start', SpaceStartType::class),
            new TypedAttribute('space-start.minimum', LengthType::class),
            new TypedAttribute('space-start.optimum', LengthType::class),
            new TypedAttribute('space-start.maximum', LengthType::class),
            new TypedAttribute('space-start.conditionality', ConditionalityType::class),
            new TypedAttribute('space-start.precedence', SpacePrecedenceType::class),
            new TypedAttribute('space-end', SpaceEndType::class),
            new TypedAttribute('space-end.minimum', LengthType::class),
            new TypedAttribute('space-end.optimum', LengthType::class),
            new TypedAttribute('space-end.maximum', LengthType::class),
            new TypedAttribute('space-end.conditionality', ConditionalityType::class),
            new TypedAttribute('space-end.precedence', SpacePrecedenceType::class),
        ]);
    }
}
