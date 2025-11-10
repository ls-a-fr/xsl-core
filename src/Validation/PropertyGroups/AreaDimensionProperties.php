<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\PropertyGroups;

use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xsl\Core\Validation\Properties\AllowedHeightScale;
use Lsa\Xsl\Core\Validation\Properties\AllowedWidthScale;
use Lsa\Xsl\Core\Validation\Properties\BlockProgressionDimension;
use Lsa\Xsl\Core\Validation\Properties\ContentHeight;
use Lsa\Xsl\Core\Validation\Properties\ContentWidth;
use Lsa\Xsl\Core\Validation\Properties\Height;
use Lsa\Xsl\Core\Validation\Properties\InlineProgressionDimension;
use Lsa\Xsl\Core\Validation\Properties\MaxHeight;
use Lsa\Xsl\Core\Validation\Properties\MaxWidth;
use Lsa\Xsl\Core\Validation\Properties\MinHeight;
use Lsa\Xsl\Core\Validation\Properties\MinWidth;
use Lsa\Xsl\Core\Validation\Properties\Scaling;
use Lsa\Xsl\Core\Validation\Properties\ScalingMethod;
use Lsa\Xsl\Core\Validation\Properties\Width;

/**
 * Area dimension properties
 *
 * @see https://www.w3.org/TR/xsl11/#d0e22982
 */
class AreaDimensionProperties extends AttributeGroup
{
    public function __construct()
    {
        parent::__construct([
            AllowedHeightScale::class,
            AllowedWidthScale::class,
            BlockProgressionDimension::class,
            ContentHeight::class,
            ContentWidth::class,
            Height::class,
            InlineProgressionDimension::class,
            MaxHeight::class,
            MaxWidth::class,
            MinHeight::class,
            MinWidth::class,
            Scaling::class,
            ScalingMethod::class,
            Width::class,
        ]);
    }
}
