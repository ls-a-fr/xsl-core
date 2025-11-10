<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\Not;

use Lsa\Xml\Utils\Traits\HasName;
use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Validation\Types\BlockProgressionDimensionMaximumType;
use Lsa\Xsl\Core\Validation\Types\BlockProgressionDimensionOptimumType;
use Lsa\Xsl\Core\Validation\Types\BlockProgressionDimensionType;
use Lsa\Xsl\Core\Validation\Types\InlineProgressionDimensionMaximumType;
use Lsa\Xsl\Core\Validation\Types\InlineProgressionDimensionOptimumType;
use Lsa\Xsl\Core\Xsd\Fop\Types\LengthType;

/**
 * This class is used to validate against fop.xsd file.
 */
class ProgressionProperties extends AttributeGroup
{
    use HasName;

    public function __construct()
    {
        $this->name = 'progression_Properties_List_Not';
        parent::__construct([
            new TypedAttribute('block-progression-dimension', BlockProgressionDimensionType::class),
            new TypedAttribute('block-progression-dimension.minimum', LengthType::class),
            new TypedAttribute('block-progression-dimension.optimum', BlockProgressionDimensionOptimumType::class),
            new TypedAttribute('block-progression-dimension.maximum', BlockProgressionDimensionMaximumType::class),
            new TypedAttribute('inline-progression-dimension', BlockProgressionDimensionType::class),
            new TypedAttribute('inline-progression-dimension.minimum', LengthType::class),
            new TypedAttribute('inline-progression-dimension.optimum', InlineProgressionDimensionOptimumType::class),
            new TypedAttribute('inline-progression-dimension.maximum', InlineProgressionDimensionMaximumType::class),
        ]);
    }
}
