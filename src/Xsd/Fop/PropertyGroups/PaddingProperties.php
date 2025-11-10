<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\PropertyGroups;

use Lsa\Xml\Utils\Traits\HasName;
use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Validation\Types\PaddingAbsoluteType;
use Lsa\Xsl\Core\Validation\Types\PaddingRelativeType;
use Lsa\Xsl\Core\Validation\Types\Xsl\ConditionalityType;
use Lsa\Xsl\Core\Validation\Types\Xsl\LengthType;

/**
 * This class is used to validate against fop.xsd file.
 */
class PaddingProperties extends AttributeGroup
{
    use HasName;

    public function __construct()
    {
        $this->name = 'Padding_Properties_List';

        parent::__construct([
            new TypedAttribute('padding', PaddingRelativeType::class),
            new TypedAttribute('padding-before', PaddingRelativeType::class),
            new TypedAttribute('padding-before.length', LengthType::class),
            new TypedAttribute('padding-before.conditionality', ConditionalityType::class),
            new TypedAttribute('padding-after', PaddingRelativeType::class),
            new TypedAttribute('padding-after.length', LengthType::class),
            new TypedAttribute('padding-after.conditionality', ConditionalityType::class),
            new TypedAttribute('padding-start', PaddingRelativeType::class),
            new TypedAttribute('padding-start.length', LengthType::class),
            new TypedAttribute('padding-start.conditionality', ConditionalityType::class),
            new TypedAttribute('padding-end', PaddingRelativeType::class),
            new TypedAttribute('padding-end.length', LengthType::class),
            new TypedAttribute('padding-end.conditionality', ConditionalityType::class),
            new TypedAttribute('padding-top', PaddingAbsoluteType::class),
            new TypedAttribute('padding-top.length', LengthType::class),
            new TypedAttribute('padding-top.conditionality', ConditionalityType::class),
            new TypedAttribute('padding-bottom', PaddingAbsoluteType::class),
            new TypedAttribute('padding-bottom.length', LengthType::class),
            new TypedAttribute('padding-bottom.conditionality', ConditionalityType::class),
            new TypedAttribute('padding-left', PaddingAbsoluteType::class),
            new TypedAttribute('padding-left.length', LengthType::class),
            new TypedAttribute('padding-left.conditionality', ConditionalityType::class),
            new TypedAttribute('padding-right', PaddingAbsoluteType::class),
            new TypedAttribute('padding-right.length', LengthType::class),
            new TypedAttribute('padding-right.conditionality', ConditionalityType::class),
        ]);
    }
}
