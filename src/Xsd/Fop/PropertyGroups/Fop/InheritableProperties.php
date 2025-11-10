<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\Fop;

use Lsa\Xml\Utils\Traits\HasName;
use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Validation\Types\BorderCollapseType;
use Lsa\Xsl\Core\Validation\Types\BorderColorType;
use Lsa\Xsl\Core\Validation\Types\BorderMultiStyleType;
use Lsa\Xsl\Core\Validation\Types\BorderMultiWidthType;
use Lsa\Xsl\Core\Validation\Types\BorderSeparationType;
use Lsa\Xsl\Core\Validation\Types\ColorType;
use Lsa\Xsl\Core\Validation\Types\DisplayAlignType;
use Lsa\Xsl\Core\Validation\Types\EndIndentType;
use Lsa\Xsl\Core\Validation\Types\FontFamilyType;
use Lsa\Xsl\Core\Validation\Types\FontSizeType;
use Lsa\Xsl\Core\Validation\Types\FontStyleType;
use Lsa\Xsl\Core\Validation\Types\FontWeightType;
use Lsa\Xsl\Core\Validation\Types\HyphenateType;
use Lsa\Xsl\Core\Validation\Types\HyphenationCharacterCountType;
use Lsa\Xsl\Core\Validation\Types\HyphenationCharacterType;
use Lsa\Xsl\Core\Validation\Types\Iso3166\CountryType;
use Lsa\Xsl\Core\Validation\Types\Iso639\LanguageType;
use Lsa\Xsl\Core\Validation\Types\LeaderAlignmentType;
use Lsa\Xsl\Core\Validation\Types\LeaderLengthType;
use Lsa\Xsl\Core\Validation\Types\LeaderPatternType;
use Lsa\Xsl\Core\Validation\Types\LeaderPatternWidthType;
use Lsa\Xsl\Core\Validation\Types\LetterSpacingType;
use Lsa\Xsl\Core\Validation\Types\LineHeightType;
use Lsa\Xsl\Core\Validation\Types\OrphansType;
use Lsa\Xsl\Core\Validation\Types\PositionType;
use Lsa\Xsl\Core\Validation\Types\ProvisionalDistanceBetweenStartsType;
use Lsa\Xsl\Core\Validation\Types\ProvisionalLabelSeparationType;
use Lsa\Xsl\Core\Validation\Types\RelativeAlignType;
use Lsa\Xsl\Core\Validation\Types\RuleStyleType;
use Lsa\Xsl\Core\Validation\Types\StartIndentType;
use Lsa\Xsl\Core\Validation\Types\TextAlignLastType;
use Lsa\Xsl\Core\Validation\Types\TextAlignType;
use Lsa\Xsl\Core\Validation\Types\TextIndentType;
use Lsa\Xsl\Core\Validation\Types\WhiteSpaceCollapseType;
use Lsa\Xsl\Core\Validation\Types\WidowsType;
use Lsa\Xsl\Core\Validation\Types\WrapOptionType;
use Lsa\Xsl\Core\Validation\Types\Xsl\KeepCompoundType;
use Lsa\Xsl\Core\Validation\Types\Xsl\KeepIntegerType;
use Lsa\Xsl\Core\Validation\Types\Xsl\LengthType;
use Lsa\Xsl\Core\Xsd\Fop\Types\BorderSideType;

/**
 * This class is used to validate against fop.xsd file.
 */
class InheritableProperties extends AttributeGroup
{
    use HasName;

    public function __construct()
    {
        $this->name = 'inheritable_properties_List_FOP';
        parent::__construct([
            new TypedAttribute('border-bottom', BorderSideType::class),
            new TypedAttribute('border-collapse', BorderCollapseType::class),
            new TypedAttribute('border-color', BorderColorType::class),
            new TypedAttribute('border-left', BorderSideType::class),
            new TypedAttribute('border-right', BorderSideType::class),
            new TypedAttribute('border-separation', BorderSeparationType::class),
            new TypedAttribute('border-style', BorderMultiStyleType::class),
            new TypedAttribute('border-top', BorderSideType::class),
            new TypedAttribute('border-width', BorderMultiWidthType::class),
            new TypedAttribute('color', ColorType::class),
            new TypedAttribute('country', CountryType::class),
            new TypedAttribute('display-align', DisplayAlignType::class),
            new TypedAttribute('end-indent', EndIndentType::class),
            new TypedAttribute('font-family', FontFamilyType::class),
            new TypedAttribute('font-size', FontSizeType::class),
            new TypedAttribute('font-style', FontStyleType::class),
            new TypedAttribute('font-weight', FontWeightType::class),
            new TypedAttribute('hyphenate', HyphenateType::class),
            new TypedAttribute('hyphenation-character', HyphenationCharacterType::class),
            new TypedAttribute('hyphenation-push-character-count', HyphenationCharacterCountType::class),
            new TypedAttribute('hyphenation-remain-character-count', HyphenationCharacterCountType::class),
            new TypedAttribute('keep-together', KeepCompoundType::class),
            new TypedAttribute('keep-together.within-column', KeepIntegerType::class),
            new TypedAttribute('keep-together.within-line', KeepIntegerType::class),
            new TypedAttribute('keep-together.within-page', KeepIntegerType::class),
            new TypedAttribute('language', LanguageType::class),
            new TypedAttribute('leader-alignment', LeaderAlignmentType::class),
            new TypedAttribute('leader-length', LeaderLengthType::class),
            new TypedAttribute('leader-length.maximum', LengthType::class),
            new TypedAttribute('leader-length.minimum', LengthType::class),
            new TypedAttribute('leader-length.optimum', LengthType::class),
            new TypedAttribute('leader-pattern', LeaderPatternType::class),
            new TypedAttribute('leader-pattern-width', LeaderPatternWidthType::class),
            new TypedAttribute('letter-spacing', LetterSpacingType::class),
            new TypedAttribute('line-height', LineHeightType::class),
            new TypedAttribute('orphans', OrphansType::class),
            new TypedAttribute('position', PositionType::class),
            new TypedAttribute('provisional-distance-between-starts', ProvisionalDistanceBetweenStartsType::class),
            new TypedAttribute('provisional-label-separation', ProvisionalLabelSeparationType::class),
            new TypedAttribute('relative-align', RelativeAlignType::class),
            new TypedAttribute('rule-style', RuleStyleType::class),
            new TypedAttribute('rule-thickness', LengthType::class),
            new TypedAttribute('start-indent', StartIndentType::class),
            new TypedAttribute('text-align', TextAlignType::class),
            new TypedAttribute('text-align-last', TextAlignLastType::class),
            new TypedAttribute('text-indent', TextIndentType::class),
            new TypedAttribute('white-space-collapse', WhiteSpaceCollapseType::class),
            new TypedAttribute('widows', WidowsType::class),
            new TypedAttribute('wrap-option', WrapOptionType::class),
        ]);
    }
}
