<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Tags;

use Lsa\Xml\Utils\Validation\Definition;
use Lsa\Xsl\Core\Validation\Properties\AlignmentAdjust;
use Lsa\Xsl\Core\Validation\Properties\AlignmentBaseline;
use Lsa\Xsl\Core\Validation\Properties\BaselineShift;
use Lsa\Xsl\Core\Validation\Properties\Character as PropertiesCharacter;
use Lsa\Xsl\Core\Validation\Properties\Color;
use Lsa\Xsl\Core\Validation\Properties\DominantBaseline;
use Lsa\Xsl\Core\Validation\Properties\GlyphOrientationHorizontal;
use Lsa\Xsl\Core\Validation\Properties\GlyphOrientationVertical;
use Lsa\Xsl\Core\Validation\Properties\Id;
use Lsa\Xsl\Core\Validation\Properties\IndexClass;
use Lsa\Xsl\Core\Validation\Properties\IndexKey;
use Lsa\Xsl\Core\Validation\Properties\KeepWithNext;
use Lsa\Xsl\Core\Validation\Properties\KeepWithPrevious;
use Lsa\Xsl\Core\Validation\Properties\LetterSpacing;
use Lsa\Xsl\Core\Validation\Properties\LineHeight;
use Lsa\Xsl\Core\Validation\Properties\ScoreSpaces;
use Lsa\Xsl\Core\Validation\Properties\SuppressAtLineBreak;
use Lsa\Xsl\Core\Validation\Properties\TextAltitude;
use Lsa\Xsl\Core\Validation\Properties\TextDecoration;
use Lsa\Xsl\Core\Validation\Properties\TextDepth;
use Lsa\Xsl\Core\Validation\Properties\TextShadow;
use Lsa\Xsl\Core\Validation\Properties\TextTransform;
use Lsa\Xsl\Core\Validation\Properties\TreatAsWordSpace;
use Lsa\Xsl\Core\Validation\Properties\Visibility;
use Lsa\Xsl\Core\Validation\Properties\WordSpacing;
use Lsa\Xsl\Core\Validation\PropertyGroups\AuralProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\BorderPaddingBackgroundProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\FontProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\HyphenationProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\InheritedProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\MarginInlineProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\RelativePositionProperties;

trait Character
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
                AuralProperties::class,
                BorderPaddingBackgroundProperties::class,
                FontProperties::class,
                HyphenationProperties::class,
                MarginInlineProperties::class,
                RelativePositionProperties::class,
                AlignmentAdjust::class,
                TreatAsWordSpace::class,
                AlignmentBaseline::class,
                BaselineShift::class,
                PropertiesCharacter::class,
                Color::class,
                DominantBaseline::class,
                TextDepth::class,
                TextAltitude::class,
                GlyphOrientationHorizontal::class,
                GlyphOrientationVertical::class,
                Id::class,
                IndexClass::class,
                IndexKey::class,
                KeepWithNext::class,
                KeepWithPrevious::class,
                LetterSpacing::class,
                LineHeight::class,
                ScoreSpaces::class,
                SuppressAtLineBreak::class,
                TextDecoration::class,
                TextShadow::class,
                TextTransform::class,
                Visibility::class,
                WordSpacing::class,
            ])
            ->inheritables([
                InheritedProperties::class,
            ]);
    }
}
