<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\Not;

use Lsa\Xml\Utils\Traits\HasName;
use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Validation\Types\AutoRestoreType;
use Lsa\Xsl\Core\Validation\Types\BackgroundType;
use Lsa\Xsl\Core\Validation\Types\BorderSpacingType;
use Lsa\Xsl\Core\Validation\Types\CaptionSideType;
use Lsa\Xsl\Core\Validation\Types\DirectionType;
use Lsa\Xsl\Core\Validation\Types\EmptyCellsType;
use Lsa\Xsl\Core\Validation\Types\FontSelectionStrategyType;
use Lsa\Xsl\Core\Validation\Types\FontSizeAdjustType;
use Lsa\Xsl\Core\Validation\Types\FontStretchType;
use Lsa\Xsl\Core\Validation\Types\FontType;
use Lsa\Xsl\Core\Validation\Types\FontVariantType;
use Lsa\Xsl\Core\Validation\Types\GlyphOrientationHorizontalType;
use Lsa\Xsl\Core\Validation\Types\GlyphOrientationVerticalType;
use Lsa\Xsl\Core\Validation\Types\HyphenationKeepType;
use Lsa\Xsl\Core\Validation\Types\HyphenationLadderCountType;
use Lsa\Xsl\Core\Validation\Types\IntrusionDisplaceType;
use Lsa\Xsl\Core\Validation\Types\LastLineEndIndentType;
use Lsa\Xsl\Core\Validation\Types\LetterSpacingType;
use Lsa\Xsl\Core\Validation\Types\LinefeedTreatmentType;
use Lsa\Xsl\Core\Validation\Types\LineHeightShiftAdjustmentType;
use Lsa\Xsl\Core\Validation\Types\LineStackingStrategyType;
use Lsa\Xsl\Core\Validation\Types\MarginType;
use Lsa\Xsl\Core\Validation\Types\MaxWidthType;
use Lsa\Xsl\Core\Validation\Types\MinHeightType;
use Lsa\Xsl\Core\Validation\Types\MinWidthType;
use Lsa\Xsl\Core\Validation\Types\PageBreakInsideType;
use Lsa\Xsl\Core\Validation\Types\ReferenceOrientationType;
use Lsa\Xsl\Core\Validation\Types\ScoreSpacesType;
use Lsa\Xsl\Core\Validation\Types\ScriptType;
use Lsa\Xsl\Core\Validation\Types\TextTransformType;
use Lsa\Xsl\Core\Validation\Types\VisibilityType;
use Lsa\Xsl\Core\Validation\Types\WhiteSpaceTreatmentType;
use Lsa\Xsl\Core\Validation\Types\WhiteSpaceType;
use Lsa\Xsl\Core\Validation\Types\WritingModeType;

/**
 * This class is used to validate against fop.xsd file.
 */
class InheritableProperties extends AttributeGroup
{
    use HasName;

    public function __construct()
    {
        $this->name = 'inheritable_properties_List_Not';
        parent::__construct([
            new TypedAttribute('auto-restore', AutoRestoreType::class),
            new TypedAttribute('background', BackgroundType::class),
            new TypedAttribute('border-spacing', BorderSpacingType::class),
            new TypedAttribute('caption-side', CaptionSideType::class),
            new TypedAttribute('direction', DirectionType::class),
            new TypedAttribute('empty-cells', EmptyCellsType::class),
            new TypedAttribute('font', FontType::class),
            new TypedAttribute('font-selection-strategy', FontSelectionStrategyType::class),
            new TypedAttribute('font-size-adjust', FontSizeAdjustType::class),
            new TypedAttribute('font-stretch', FontStretchType::class),
            new TypedAttribute('font-variant', FontVariantType::class),
            new TypedAttribute('glyph-orientation-vertical', GlyphOrientationVerticalType::class),
            new TypedAttribute('glyph-orientation-horizontal', GlyphOrientationHorizontalType::class),
            new TypedAttribute('hyphenation-keep', HyphenationKeepType::class),
            new TypedAttribute('hyphenation-ladder-count', HyphenationLadderCountType::class),
            new TypedAttribute('intrusion-displace', IntrusionDisplaceType::class),
            new TypedAttribute('last-line-end-indent', LastLineEndIndentType::class),
            new TypedAttribute('line-height-shift-adjustment', LineHeightShiftAdjustmentType::class),
            new TypedAttribute('line-stacking-strategy', LineStackingStrategyType::class),
            new TypedAttribute('linefeed-treatment', LinefeedTreatmentType::class),
            new TypedAttribute('margin', MarginType::class),
            new TypedAttribute('max-width', MaxWidthType::class),
            new TypedAttribute('min-height', MinHeightType::class),
            new TypedAttribute('min-width', MinWidthType::class),
            new TypedAttribute('page-break-inside', PageBreakInsideType::class),
            new TypedAttribute('reference-orientation', ReferenceOrientationType::class),
            new TypedAttribute('score-spaces', ScoreSpacesType::class),
            new TypedAttribute('script', ScriptType::class),
            new TypedAttribute('text-transform', TextTransformType::class),
            new TypedAttribute('visibility', VisibilityType::class),
            new TypedAttribute('white-space', WhiteSpaceType::class),
            new TypedAttribute('white-space-treatment', WhiteSpaceTreatmentType::class),
            new TypedAttribute('word-spacing', LetterSpacingType::class),
            new TypedAttribute('writing-mode', WritingModeType::class),
        ]);
    }
}
