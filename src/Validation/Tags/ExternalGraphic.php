<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Tags;

use Lsa\Xml\Utils\Validation\Definition;
use Lsa\Xsl\Core\Validation\Properties\AlignmentAdjust;
use Lsa\Xsl\Core\Validation\Properties\AlignmentBaseline;
use Lsa\Xsl\Core\Validation\Properties\AllowedHeightScale;
use Lsa\Xsl\Core\Validation\Properties\AllowedWidthScale;
use Lsa\Xsl\Core\Validation\Properties\BaselineShift;
use Lsa\Xsl\Core\Validation\Properties\BlockProgressionDimension;
use Lsa\Xsl\Core\Validation\Properties\Clip;
use Lsa\Xsl\Core\Validation\Properties\ContentHeight;
use Lsa\Xsl\Core\Validation\Properties\ContentType;
use Lsa\Xsl\Core\Validation\Properties\ContentWidth;
use Lsa\Xsl\Core\Validation\Properties\DisplayAlign;
use Lsa\Xsl\Core\Validation\Properties\DominantBaseline;
use Lsa\Xsl\Core\Validation\Properties\Height;
use Lsa\Xsl\Core\Validation\Properties\Id;
use Lsa\Xsl\Core\Validation\Properties\IndexClass;
use Lsa\Xsl\Core\Validation\Properties\IndexKey;
use Lsa\Xsl\Core\Validation\Properties\InlineProgressionDimension;
use Lsa\Xsl\Core\Validation\Properties\KeepWithNext;
use Lsa\Xsl\Core\Validation\Properties\KeepWithPrevious;
use Lsa\Xsl\Core\Validation\Properties\LineHeight;
use Lsa\Xsl\Core\Validation\Properties\Overflow;
use Lsa\Xsl\Core\Validation\Properties\Scaling;
use Lsa\Xsl\Core\Validation\Properties\ScalingMethod;
use Lsa\Xsl\Core\Validation\Properties\Source;
use Lsa\Xsl\Core\Validation\Properties\TextAlign;
use Lsa\Xsl\Core\Validation\Properties\Width;
use Lsa\Xsl\Core\Validation\PropertyGroups\AccessibilityProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\AuralProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\BorderPaddingBackgroundProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\InheritedProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\MarginInlineProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\RelativePositionProperties;

trait ExternalGraphic
{
    /**
     * Returns this tag definition
     *
     * @return Definition This tag definition
     */
    public function asDefinition(): Definition
    {
        return (new Definition())
            ->require(Source::class)
            ->allows([
                AccessibilityProperties::class,
                AuralProperties::class,
                BorderPaddingBackgroundProperties::class,
                MarginInlineProperties::class,
                RelativePositionProperties::class,
                AlignmentAdjust::class,
                AlignmentBaseline::class,
                AllowedHeightScale::class,
                AllowedWidthScale::class,
                BaselineShift::class,
                BlockProgressionDimension::class,
                Clip::class,
                ContentHeight::class,
                ContentType::class,
                ContentWidth::class,
                DisplayAlign::class,
                DominantBaseline::class,
                Height::class,
                Id::class,
                IndexClass::class,
                IndexKey::class,
                InlineProgressionDimension::class,
                KeepWithNext::class,
                KeepWithPrevious::class,
                LineHeight::class,
                Overflow::class,
                Scaling::class,
                ScalingMethod::class,
                TextAlign::class,
                Width::class,
            ])
            ->inheritables([
                InheritedProperties::class,
            ]);
    }
}
