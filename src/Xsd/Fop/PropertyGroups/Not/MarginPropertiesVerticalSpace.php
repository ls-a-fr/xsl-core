<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\Not;

use Lsa\Xml\Utils\Traits\HasName;
use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Validation\Types\SpaceAfterType;
use Lsa\Xsl\Core\Validation\Types\SpaceBeforeType;
use Lsa\Xsl\Core\Validation\Types\Xsl\ConditionalityType;
use Lsa\Xsl\Core\Validation\Types\Xsl\LengthType;
use Lsa\Xsl\Core\Validation\Types\Xsl\SpacePrecedenceType;

/**
 * This class is used to validate against fop.xsd file.
 */
class MarginPropertiesVerticalSpace extends AttributeGroup
{
    use HasName;

    public function __construct()
    {
        $this->name = 'Margin_Properties_vertical_Space_List_Not';
        parent::__construct([
            new TypedAttribute('space-before', SpaceBeforeType::class),
            new TypedAttribute('space-before.minimum', LengthType::class),
            new TypedAttribute('space-before.maximum', LengthType::class),
            new TypedAttribute('space-before.conditionality', ConditionalityType::class),
            new TypedAttribute('space-before.precedence', SpacePrecedenceType::class),
            new TypedAttribute('space-after', SpaceAfterType::class),
            new TypedAttribute('space-after.minimum', LengthType::class),
            new TypedAttribute('space-after.maximum', LengthType::class),
            new TypedAttribute('space-after.conditionality', ConditionalityType::class),
            new TypedAttribute('space-after.precedence', SpacePrecedenceType::class),
        ]);
    }
}
