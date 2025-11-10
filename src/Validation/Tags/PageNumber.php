<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Tags;

use Lsa\Xml\Utils\Validation\Definition;
use Lsa\Xsl\Core\Validation\Properties\AlignmentAdjust;
use Lsa\Xsl\Core\Validation\Properties\AlignmentBaseline;
use Lsa\Xsl\Core\Validation\Properties\BaselineShift;
use Lsa\Xsl\Core\Validation\Properties\DominantBaseline;
use Lsa\Xsl\Core\Validation\Properties\Id;
use Lsa\Xsl\Core\Validation\Properties\IndexClass;
use Lsa\Xsl\Core\Validation\Properties\IndexKey;
use Lsa\Xsl\Core\Validation\Properties\KeepWithNext;
use Lsa\Xsl\Core\Validation\Properties\KeepWithPrevious;
use Lsa\Xsl\Core\Validation\Properties\LetterSpacing;
use Lsa\Xsl\Core\Validation\Properties\LineHeight;
use Lsa\Xsl\Core\Validation\Properties\ScoreSpaces;
use Lsa\Xsl\Core\Validation\Properties\TextAltitude;
use Lsa\Xsl\Core\Validation\Properties\TextDecoration;
use Lsa\Xsl\Core\Validation\Properties\TextDepth;
use Lsa\Xsl\Core\Validation\Properties\TextShadow;
use Lsa\Xsl\Core\Validation\Properties\TextTransform;
use Lsa\Xsl\Core\Validation\Properties\Visibility;
use Lsa\Xsl\Core\Validation\Properties\WordSpacing;
use Lsa\Xsl\Core\Validation\Properties\WrapOption;
use Lsa\Xsl\Core\Validation\PropertyGroups\AccessibilityProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\AuralProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\BorderPaddingBackgroundProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\FontProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\InheritedProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\MarginInlineProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\RelativePositionProperties;

trait PageNumber
{
    /**
     * Returns this tag definition
     *
     * @return Definition This tag definition
     */
    public function asDefinition(): Definition
    {
        return (new Definition())
            ->allows([
                AccessibilityProperties::class,
                AuralProperties::class,
                BorderPaddingBackgroundProperties::class,
                FontProperties::class,
                MarginInlineProperties::class,
                RelativePositionProperties::class,
                AlignmentAdjust::class,
                AlignmentBaseline::class,
                BaselineShift::class,
                DominantBaseline::class,
                Id::class,
                IndexClass::class,
                IndexKey::class,
                KeepWithNext::class,
                KeepWithPrevious::class,
                LetterSpacing::class,
                LineHeight::class,
                ScoreSpaces::class,
                TextAltitude::class,
                TextDecoration::class,
                TextDepth::class,
                TextShadow::class,
                TextTransform::class,
                Visibility::class,
                WordSpacing::class,
                WrapOption::class,
            ])
            ->inheritables([
                InheritedProperties::class,
            ]);
    }
}
