<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\PropertyGroups;

use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xsl\Core\Validation\Properties\AllowedHeightScale;
use Lsa\Xsl\Core\Validation\Properties\AllowedWidthScale;
use Lsa\Xsl\Core\Validation\Properties\AutoRestore;
use Lsa\Xsl\Core\Validation\Properties\Azimuth;
use Lsa\Xsl\Core\Validation\Properties\BorderCollapse;
use Lsa\Xsl\Core\Validation\Properties\BorderSeparation;
use Lsa\Xsl\Core\Validation\Properties\BorderSpacing;
use Lsa\Xsl\Core\Validation\Properties\CaptionSide;
use Lsa\Xsl\Core\Validation\Properties\ChangeBarColor;
use Lsa\Xsl\Core\Validation\Properties\ChangeBarOffset;
use Lsa\Xsl\Core\Validation\Properties\ChangeBarPlacement;
use Lsa\Xsl\Core\Validation\Properties\ChangeBarStyle;
use Lsa\Xsl\Core\Validation\Properties\ChangeBarWidth;
use Lsa\Xsl\Core\Validation\Properties\Color;
use Lsa\Xsl\Core\Validation\Properties\Cue;
use Lsa\Xsl\Core\Validation\Properties\Direction;
use Lsa\Xsl\Core\Validation\Properties\DisplayAlign;
use Lsa\Xsl\Core\Validation\Properties\Elevation;
use Lsa\Xsl\Core\Validation\Properties\EmptyCells;
use Lsa\Xsl\Core\Validation\Properties\EndIndent;
use Lsa\Xsl\Core\Validation\Properties\Font;
use Lsa\Xsl\Core\Validation\Properties\FontFamily;
use Lsa\Xsl\Core\Validation\Properties\FontSelectionStrategy;
use Lsa\Xsl\Core\Validation\Properties\FontSize;
use Lsa\Xsl\Core\Validation\Properties\FontSizeAdjust;
use Lsa\Xsl\Core\Validation\Properties\FontStretch;
use Lsa\Xsl\Core\Validation\Properties\FontStyle;
use Lsa\Xsl\Core\Validation\Properties\FontVariant;
use Lsa\Xsl\Core\Validation\Properties\FontWeight;
use Lsa\Xsl\Core\Validation\Properties\GlyphOrientationHorizontal;
use Lsa\Xsl\Core\Validation\Properties\GlyphOrientationVertical;
use Lsa\Xsl\Core\Validation\Properties\Hyphenate;
use Lsa\Xsl\Core\Validation\Properties\HyphenationCharacter;
use Lsa\Xsl\Core\Validation\Properties\HyphenationKeep;
use Lsa\Xsl\Core\Validation\Properties\HyphenationLadderCount;
use Lsa\Xsl\Core\Validation\Properties\HyphenationPushCharacterCount;
use Lsa\Xsl\Core\Validation\Properties\HyphenationRemainCharacterCount;
use Lsa\Xsl\Core\Validation\Properties\IntrinsicScaleValue;
use Lsa\Xsl\Core\Validation\Properties\IntrusionDisplace;
use Lsa\Xsl\Core\Validation\Properties\KeepTogether;
use Lsa\Xsl\Core\Validation\Properties\Language;
use Lsa\Xsl\Core\Validation\Properties\LastLineEndIndent;
use Lsa\Xsl\Core\Validation\Properties\LeaderAlignment;
use Lsa\Xsl\Core\Validation\Properties\LeaderLength;
use Lsa\Xsl\Core\Validation\Properties\LeaderPattern;
use Lsa\Xsl\Core\Validation\Properties\LeaderPatternWidth;
use Lsa\Xsl\Core\Validation\Properties\LetterSpacing;
use Lsa\Xsl\Core\Validation\Properties\LinefeedTreatment;
use Lsa\Xsl\Core\Validation\Properties\LineHeight;
use Lsa\Xsl\Core\Validation\Properties\LineHeightShiftAdjustment;
use Lsa\Xsl\Core\Validation\Properties\LineStackingStrategy;
use Lsa\Xsl\Core\Validation\Properties\MergePagesAcrossIndexKeyReferences;
use Lsa\Xsl\Core\Validation\Properties\MergeRangesAcrossIndexKeyReferences;
use Lsa\Xsl\Core\Validation\Properties\MergeSequentialPageNumbers;
use Lsa\Xsl\Core\Validation\Properties\Orphans;
use Lsa\Xsl\Core\Validation\Properties\PageBreakInside;
use Lsa\Xsl\Core\Validation\Properties\PageNumberTreatment;
use Lsa\Xsl\Core\Validation\Properties\Pitch;
use Lsa\Xsl\Core\Validation\Properties\PitchRange;
use Lsa\Xsl\Core\Validation\Properties\ProvisionalDistanceBetweenStarts;
use Lsa\Xsl\Core\Validation\Properties\ProvisionalLabelSeparation;
use Lsa\Xsl\Core\Validation\Properties\RelativeAlign;
use Lsa\Xsl\Core\Validation\Properties\Richness;
use Lsa\Xsl\Core\Validation\Properties\RuleStyle;
use Lsa\Xsl\Core\Validation\Properties\RuleThickness;
use Lsa\Xsl\Core\Validation\Properties\ScaleOption;
use Lsa\Xsl\Core\Validation\Properties\ScoreSpaces;
use Lsa\Xsl\Core\Validation\Properties\Script;
use Lsa\Xsl\Core\Validation\Properties\Speak;
use Lsa\Xsl\Core\Validation\Properties\SpeakHeader;
use Lsa\Xsl\Core\Validation\Properties\SpeakNumeral;
use Lsa\Xsl\Core\Validation\Properties\SpeakPunctuation;
use Lsa\Xsl\Core\Validation\Properties\SpeechRate;
use Lsa\Xsl\Core\Validation\Properties\StartIndent;
use Lsa\Xsl\Core\Validation\Properties\Stress;
use Lsa\Xsl\Core\Validation\Properties\TextAlign;
use Lsa\Xsl\Core\Validation\Properties\TextAlignLast;
use Lsa\Xsl\Core\Validation\Properties\TextIndent;
use Lsa\Xsl\Core\Validation\Properties\TextTransform;
use Lsa\Xsl\Core\Validation\Properties\Visibility;
use Lsa\Xsl\Core\Validation\Properties\VoiceFamily;
use Lsa\Xsl\Core\Validation\Properties\Volume;
use Lsa\Xsl\Core\Validation\Properties\WhiteSpace;
use Lsa\Xsl\Core\Validation\Properties\WhiteSpaceCollapse;
use Lsa\Xsl\Core\Validation\Properties\WhiteSpaceTreatment;
use Lsa\Xsl\Core\Validation\Properties\Widows;
use Lsa\Xsl\Core\Validation\Properties\WordSpacing;
use Lsa\Xsl\Core\Validation\Properties\WrapOption;
use Lsa\Xsl\Core\Validation\Properties\WritingMode;
use Lsa\Xsl\Core\Validation\Properties\XmlLang;

/**
 * Inherited properties that are applied to all objects
 *
 * @see https://www.w3.org/TR/xsl11/#inheritance
 */
class InheritedProperties extends AttributeGroup
{
    public function __construct()
    {
        parent::__construct([
            AllowedHeightScale::class,
            AllowedWidthScale::class,
            AutoRestore::class,
            Azimuth::class,
            BorderCollapse::class,
            BorderSeparation::class,
            BorderSpacing::class,
            CaptionSide::class,
            ChangeBarColor::class,
            ChangeBarOffset::class,
            ChangeBarPlacement::class,
            ChangeBarStyle::class,
            ChangeBarWidth::class,
            Color::class,
            Cue::class,
            Direction::class,
            DisplayAlign::class,
            Elevation::class,
            EmptyCells::class,
            EndIndent::class,
            Font::class,
            FontFamily::class,
            FontSelectionStrategy::class,
            FontSize::class,
            FontStretch::class,
            FontSizeAdjust::class,
            FontStyle::class,
            FontVariant::class,
            FontWeight::class,
            GlyphOrientationHorizontal::class,
            GlyphOrientationVertical::class,
            Hyphenate::class,
            HyphenationCharacter::class,
            HyphenationKeep::class,
            HyphenationLadderCount::class,
            HyphenationPushCharacterCount::class,
            HyphenationRemainCharacterCount::class,
            IntrinsicScaleValue::class,
            IntrusionDisplace::class,
            KeepTogether::class,
            Language::class,
            LastLineEndIndent::class,
            LeaderAlignment::class,
            LeaderPattern::class,
            LeaderPatternWidth::class,
            LeaderLength::class,
            LetterSpacing::class,
            LinefeedTreatment::class,
            LineHeight::class,
            LineHeightShiftAdjustment::class,
            LineStackingStrategy::class,
            MergeRangesAcrossIndexKeyReferences::class,
            MergeSequentialPageNumbers::class,
            MergePagesAcrossIndexKeyReferences::class,
            Orphans::class,
            PageBreakInside::class,
            PageNumberTreatment::class,
            Pitch::class,
            PitchRange::class,
            ProvisionalLabelSeparation::class,
            ProvisionalDistanceBetweenStarts::class,
            RelativeAlign::class,
            Richness::class,
            RuleStyle::class,
            RuleThickness::class,
            ScaleOption::class,
            ScoreSpaces::class,
            Script::class,
            Speak::class,
            SpeakHeader::class,
            SpeakNumeral::class,
            SpeakPunctuation::class,
            SpeechRate::class,
            StartIndent::class,
            Stress::class,
            TextAlign::class,
            TextAlignLast::class,
            TextIndent::class,
            TextTransform::class,
            Visibility::class,
            VoiceFamily::class,
            Volume::class,
            WhiteSpace::class,
            WhiteSpaceCollapse::class,
            WhiteSpaceTreatment::class,
            Widows::class,
            WordSpacing::class,
            WrapOption::class,
            WritingMode::class,
            XmlLang::class,
        ]);
    }
}
