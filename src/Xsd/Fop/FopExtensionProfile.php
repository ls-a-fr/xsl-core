<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop;

use Lsa\Xml\Utils\Validation\Any;
use Lsa\Xml\Utils\Validation\Definition;
use Lsa\Xml\Utils\Validation\Element;
use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xml\Utils\Validation\Xml\StringType;
use Lsa\Xsd\Generator\Tags\Attribute;
use Lsa\Xsd\Generator\Tags\Type;
use Lsa\Xsl\Core\Tags\Block\Block;
use Lsa\Xsl\Core\Tags\Block\BlockContainer;
use Lsa\Xsl\Core\Tags\Bookmark\BookmarkTree;
use Lsa\Xsl\Core\Tags\Inline\BidiOverride;
use Lsa\Xsl\Core\Tags\Inline\Character;
use Lsa\Xsl\Core\Tags\Inline\ExternalGraphic;
use Lsa\Xsl\Core\Tags\Inline\InitialPropertySet;
use Lsa\Xsl\Core\Tags\Inline\Inline;
use Lsa\Xsl\Core\Tags\Inline\InlineContainer;
use Lsa\Xsl\Core\Tags\Inline\InstreamForeignObject;
use Lsa\Xsl\Core\Tags\Inline\Leader;
use Lsa\Xsl\Core\Tags\Inline\PageNumber;
use Lsa\Xsl\Core\Tags\Inline\PageNumberCitation;
use Lsa\Xsl\Core\Tags\Layout\ColorProfile;
use Lsa\Xsl\Core\Tags\Layout\Flow;
use Lsa\Xsl\Core\Tags\Layout\PageSequence;
use Lsa\Xsl\Core\Tags\Layout\PageSequenceWrapper;
use Lsa\Xsl\Core\Tags\Layout\RegionAfter;
use Lsa\Xsl\Core\Tags\Layout\RegionBefore;
use Lsa\Xsl\Core\Tags\Layout\RegionBody;
use Lsa\Xsl\Core\Tags\Layout\RegionEnd;
use Lsa\Xsl\Core\Tags\Layout\RegionStart;
use Lsa\Xsl\Core\Tags\Layout\Root;
use Lsa\Xsl\Core\Tags\Layout\SimplePageMaster;
use Lsa\Xsl\Core\Tags\Layout\StaticContent;
use Lsa\Xsl\Core\Tags\Layout\Title;
use Lsa\Xsl\Core\Tags\Link\BasicLink;
use Lsa\Xsl\Core\Tags\List\ListBlock;
use Lsa\Xsl\Core\Tags\List\ListItem;
use Lsa\Xsl\Core\Tags\List\ListItemBody;
use Lsa\Xsl\Core\Tags\List\ListItemLabel;
use Lsa\Xsl\Core\Tags\Multi\MultiCase;
use Lsa\Xsl\Core\Tags\Multi\MultiProperties;
use Lsa\Xsl\Core\Tags\Multi\MultiPropertySet;
use Lsa\Xsl\Core\Tags\Multi\MultiSwitch;
use Lsa\Xsl\Core\Tags\Multi\MultiToggle;
use Lsa\Xsl\Core\Tags\Other\Marker;
use Lsa\Xsl\Core\Tags\Other\Wrapper;
use Lsa\Xsl\Core\Tags\OutOfLine\FloatElement;
use Lsa\Xsl\Core\Tags\OutOfLine\Footnote;
use Lsa\Xsl\Core\Tags\OutOfLine\FootnoteBody;
use Lsa\Xsl\Core\Tags\Table\Table;
use Lsa\Xsl\Core\Tags\Table\TableAndCaption;
use Lsa\Xsl\Core\Tags\Table\TableBody;
use Lsa\Xsl\Core\Tags\Table\TableCaption;
use Lsa\Xsl\Core\Tags\Table\TableCell;
use Lsa\Xsl\Core\Tags\Table\TableColumn;
use Lsa\Xsl\Core\Tags\Table\TableFooter;
use Lsa\Xsl\Core\Tags\Table\TableHeader;
use Lsa\Xsl\Core\Tags\Table\TableRow;
use Lsa\Xsl\Core\Validation\Properties\Id;
use Lsa\Xsl\Core\Validation\Properties\InlineProgressionDimension;
use Lsa\Xsl\Core\Validation\Properties\PageBreakAfter;
use Lsa\Xsl\Core\Validation\Properties\PageBreakBefore;
use Lsa\Xsl\Core\Validation\Properties\Precedence;
use Lsa\Xsl\Core\Validation\Properties\VerticalAlign;
use Lsa\Xsl\Core\Validation\Types\Xsl\IdType;
use Lsa\Xsl\Core\Validation\Types\Xsl\IntegerType;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\BreakProperties;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\InheritableProperties;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\KeepProperties;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\ListProperties;
use Lsa\Xsl\Core\Xsd\Fop\TagGroups\BlockList;
use Lsa\Xsl\Core\Xsd\Fop\TagGroups\FloatList;
use Lsa\Xsl\Core\Xsd\Fop\TagGroups\FootnoteList;
use Lsa\Xsl\Core\Xsd\Fop\TagGroups\InlineList;
use Lsa\Xsl\Core\Xsd\Fop\Types\CharacterType;
use Lsa\Xsl\Core\Xsd\Fop\Types\ContentHeightType;
use Lsa\Xsl\Core\Xsd\Fop\Types\KeepIntegerType;
use Lsa\Xsl\Core\Xsd\Fop\Types\LengthRangeType;
use Lsa\Xsl\Core\Xsd\Fop\Types\LengthType;
use Lsa\Xsl\Core\Xsd\Fop\Types\VerticalAlignType;

// phpcs:disable Generic.Files.LineLength
/**
 * Extension profile whose main goal is to group any extension done to XSL specification.
 * Few attributes are missing, few enumerations have more values, some tags are unavailable.
 *
 * Use it with:
 *
 * ```php
 * // Sets SPECIFICATION_EXTENSION mode
 * $profile = new FopProfile(FopProfile::SPECIFICATION_EXTENSION);
 * ```
 */
class FopExtensionProfile
{
    /**
     * Execute this profile operations
     *
     * @param  \Lsa\Xsl\Core\Xsd\Fop\FopProfile  $profile  The FOP profile
     */
    public function execute($profile): void
    {
        /**
         * All these types are coalesced to string
         */
        $profile->considerString([
            \Lsa\Xsl\Core\Validation\Types\CueType::class,
            \Lsa\Xsl\Core\Validation\Types\ExternalDestinationType::class,
            \Lsa\Xsl\Core\Validation\Types\InternalDestinationType::class,
            \Lsa\Xsl\Core\Validation\Types\Css\LanguageCountryType::class,
            \Lsa\Xsl\Core\Validation\Types\PauseType::class,
            \Lsa\Xsl\Core\Validation\Types\PitchRangeType::class,
            \Lsa\Xsl\Core\Validation\Types\PitchType::class,
            \Lsa\Xsl\Core\Validation\Types\PlayDuringType::class,
            \Lsa\Xsl\Core\Validation\Types\RichnessType::class,
            \Lsa\Xsl\Core\Validation\Types\SpeakPunctuationType::class,
            \Lsa\Xsl\Core\Validation\Types\SourceDocumentType::class,
            \Lsa\Xsl\Core\Validation\Types\SourceType::class,
            \Lsa\Xsl\Core\Validation\Types\StressType::class,
            \Lsa\Xsl\Core\Validation\Types\TargetPresentationContextType::class,
            \Lsa\Xsl\Core\Validation\Types\TargetProcessingContextType::class,
            \Lsa\Xsl\Core\Validation\Types\TargetStylesheetType::class,
            \Lsa\Xsl\Core\Validation\Types\VoiceFamilyType::class,
            \Lsa\Xsl\Core\Validation\Types\VolumeType::class,
        ]);

        $this->targetTypes($profile);
        $this->targetAttributes($profile);
        $this->targetTags($profile);
    }

    protected function targetAttributes(FopProfile $profile): void
    {
        $profile
            ->target(Attribute::class)
            ->replaceMap([
                [\Lsa\Xsl\Core\Validation\Types\BorderPrecedenceType::class,          \Lsa\Xsl\Core\Validation\Types\PrecedenceType::class],
                [\Lsa\Xsl\Core\Validation\Types\BorderSeparationType::class,          \Lsa\Xsl\Core\Validation\Types\Xsl\LengthBpIpDirectionType::class],
                [\Lsa\Xsl\Core\Validation\Types\ColumnCountType::class,           \Lsa\Xsl\Core\Validation\Types\Xsl\IntegerType::class],
                [
                    [
                        \Lsa\Xsl\Core\Validation\Types\ColumnGapType::class,
                        \Lsa\Xsl\Core\Validation\Types\Xsl\LengthType::class,
                    ],
                    LengthType::class,
                ],
                [
                    [
                        \Lsa\Xsl\Core\Validation\Types\InitialPageNumberType::class,
                        \Lsa\Xsl\Core\Validation\Types\MaximumRepeatsType::class,
                        \Lsa\Xsl\Core\Validation\Types\PositiveIntegerType::class,
                    ],
                    \Lsa\Xsl\Core\Validation\Types\Xsl\IntegerType::class,
                ],
            ]);
    }

    /**
     * Utility method to handle every type replacement
     *
     * @param  \Lsa\Xsl\Core\Xsd\Fop\FopProfile  $profile  The profile
     */
    protected function targetTypes(FopProfile $profile): void
    {
        $profile->enumSubsets([
            [
                /**
                 * BorderCollapseType does not allow COLLAPSE_WITH_PRECEDENCE
                 */
                \Lsa\Xsl\Core\Validation\Types\BorderCollapseType::class,
                [
                    \Lsa\Xsl\Core\Validation\Types\BorderCollapseType::COLLAPSE,
                    \Lsa\Xsl\Core\Validation\Types\BorderCollapseType::SEPARATE,
                    \Lsa\Xsl\Core\Validation\Types\BorderCollapseType::INHERIT,
                ],
            ],
            [
                /**
                 * FloatType does not allow INSIDE or OUTSIDE
                 */
                \Lsa\Xsl\Core\Validation\Types\FloatType::class,
                [
                    \Lsa\Xsl\Core\Validation\Types\FloatType::INHERIT,
                    \Lsa\Xsl\Core\Validation\Types\FloatType::BEFORE,
                    \Lsa\Xsl\Core\Validation\Types\FloatType::START,
                    \Lsa\Xsl\Core\Validation\Types\FloatType::END,
                    \Lsa\Xsl\Core\Validation\Types\FloatType::LEFT,
                    \Lsa\Xsl\Core\Validation\Types\FloatType::RIGHT,
                    \Lsa\Xsl\Core\Validation\Types\FloatType::NONE,
                ],
            ],
            [
                /**
                 * TextAlignLastType does not allow RELATIVE
                 */
                \Lsa\Xsl\Core\Validation\Types\TextAlignLastType::class,
                [
                    \Lsa\Xsl\Core\Validation\Types\TextAlignLastType::START,
                    \Lsa\Xsl\Core\Validation\Types\TextAlignLastType::CENTER,
                    \Lsa\Xsl\Core\Validation\Types\TextAlignLastType::END,
                    \Lsa\Xsl\Core\Validation\Types\TextAlignLastType::JUSTIFY,
                    \Lsa\Xsl\Core\Validation\Types\TextAlignLastType::INSIDE,
                    \Lsa\Xsl\Core\Validation\Types\TextAlignLastType::OUTSIDE,
                    \Lsa\Xsl\Core\Validation\Types\TextAlignLastType::LEFT,
                    \Lsa\Xsl\Core\Validation\Types\TextAlignLastType::RIGHT,
                    \Lsa\Xsl\Core\Validation\Types\TextAlignLastType::INHERIT,
                ],
            ],
            [
                /**
                 * Clear does not allow BOTH
                 */
                \Lsa\Xsl\Core\Validation\Types\ClearType::class,
                [
                    \Lsa\Xsl\Core\Validation\Types\ClearType::START,
                    \Lsa\Xsl\Core\Validation\Types\ClearType::END,
                    \Lsa\Xsl\Core\Validation\Types\ClearType::LEFT,
                    \Lsa\Xsl\Core\Validation\Types\ClearType::RIGHT,
                    \Lsa\Xsl\Core\Validation\Types\ClearType::NONE,
                    \Lsa\Xsl\Core\Validation\Types\ClearType::INHERIT,
                    \Lsa\Xsl\Core\Validation\Types\ClearType::BOTH,
                ],
            ],
            [
                /**
                 * Overflow does not allow BOTH
                 */
                \Lsa\Xsl\Core\Validation\Types\OverflowType::class,
                [
                    \Lsa\Xsl\Core\Validation\Types\OverflowType::AUTO,
                    \Lsa\Xsl\Core\Validation\Types\OverflowType::VISIBLE,
                    \Lsa\Xsl\Core\Validation\Types\OverflowType::HIDDEN,
                    \Lsa\Xsl\Core\Validation\Types\OverflowType::SCROLL,
                    \Lsa\Xsl\Core\Validation\Types\OverflowType::ERROR_IF_OVERFLOW,
                    \Lsa\Xsl\Core\Validation\Types\OverflowType::INHERIT,
                ],
            ],
            [
                /**
                 * PagePosition does not allow ONLY
                 */
                \Lsa\Xsl\Core\Validation\Types\PagePositionType::class,
                [
                    \Lsa\Xsl\Core\Validation\Types\PagePositionType::FIRST,
                    \Lsa\Xsl\Core\Validation\Types\PagePositionType::LAST,
                    \Lsa\Xsl\Core\Validation\Types\PagePositionType::REST,
                    \Lsa\Xsl\Core\Validation\Types\PagePositionType::ANY,
                    \Lsa\Xsl\Core\Validation\Types\PagePositionType::INHERIT,
                ],
            ],
            [
                /**
                 * WritingMode only allows "lr-tb", "rl-tb", "tb-rl", "lr", "rl", "tb" and inherit
                 */
                \Lsa\Xsl\Core\Validation\Types\WritingModeType::class,
                [
                    \Lsa\Xsl\Core\Validation\Types\WritingModeType::LR_TB,
                    \Lsa\Xsl\Core\Validation\Types\WritingModeType::RL_TB,
                    \Lsa\Xsl\Core\Validation\Types\WritingModeType::TB_RL,
                    \Lsa\Xsl\Core\Validation\Types\WritingModeType::LR,
                    \Lsa\Xsl\Core\Validation\Types\WritingModeType::RL,
                    \Lsa\Xsl\Core\Validation\Types\WritingModeType::TB,
                    \Lsa\Xsl\Core\Validation\Types\WritingModeType::INHERIT,
                ],
            ],
        ])
            // Serbia and private country is not part of FOP profile
            ->enumExcept(\Lsa\Xsl\Core\Validation\Types\CountryType::class, [
                \Lsa\Xsl\Core\Validation\Types\Iso3166\CountryType::RS,
                \Lsa\Xsl\Core\Validation\Types\Iso3166\CountryType::QM,
            ])
            ->target(Type::class)
            ->replaceMap([
                [\Lsa\Xsl\Core\Validation\Types\BorderPrecedenceType::class,          \Lsa\Xsl\Core\Validation\Types\PrecedenceType::class],
                [\Lsa\Xsl\Core\Validation\Types\BorderSeparationType::class,          \Lsa\Xsl\Core\Validation\Types\Xsl\LengthBpIpDirectionType::class],
                [\Lsa\Xsl\Core\Validation\Types\ColumnCountType::class,           \Lsa\Xsl\Core\Validation\Types\Xsl\IntegerType::class],
                [
                    [
                        \Lsa\Xsl\Core\Validation\Types\ColumnGapType::class,
                        \Lsa\Xsl\Core\Validation\Types\Xsl\LengthType::class,
                    ],
                    LengthType::class,

                ],
                [\Lsa\Xsl\Core\Validation\Types\Xsl\LengthRangeType::class, LengthRangeType::class],
                [
                    [
                        \Lsa\Xsl\Core\Validation\Types\InitialPageNumberType::class,
                        \Lsa\Xsl\Core\Validation\Types\MaximumRepeatsType::class,
                        \Lsa\Xsl\Core\Validation\Types\PositiveIntegerType::class,
                    ],
                    \Lsa\Xsl\Core\Validation\Types\Xsl\IntegerType::class,
                ],

            ])
            ->without([
                /**
                 * Unused type as RetrieveTableMarker is not rendered
                 */
                \Lsa\Xsl\Core\Validation\Types\RetrieveBoundaryWithinTableType::class,
                /**
                 * Unused type as RetrieveTableMarker is not rendered
                 */
                \Lsa\Xsl\Core\Validation\Types\RetrievePositionWithinTableType::class,
                /**
                 * Unused type as PageNumberCitationLast is not rendered
                 */
                \Lsa\Xsl\Core\Validation\Types\PageCitationStrategyType::class,
                /**
                 * Unused type as page-number-treatment is denied
                 */
                \Lsa\Xsl\Core\Validation\Types\PageNumberTreatmentType::class,
                /**
                 * Every properties that reference UriSpecificationType is considered string
                 */
                \Lsa\Xsl\Core\Validation\Types\Xsl\UriSpecificationType::class,
                /**
                 * Never used as ChangeBarBegin is not defined
                 */
                \Lsa\Xsl\Core\Validation\Types\ChangeBarPlacementType::class,
                /**
                 * Never used as ScalingValueCitation tag is not defined
                 */
                \Lsa\Xsl\Core\Validation\Types\ScaleOptionType::class,
                /**
                 * Unused as IndexPageCitationList is not defined
                 */
                \Lsa\Xsl\Core\Validation\Types\MergeSequentialPageNumbersType::class,
                /**
                 * Never used as ScriptType is considered string
                 */
                \Lsa\Xsl\Core\Validation\Types\Iso15924\ScriptAlphabeticType::class,
                /**
                 * Never used as ScriptType is considered string
                 */
                \Lsa\Xsl\Core\Validation\Types\Iso15924\ScriptAlphanumericType::class,
                /**
                 * Unused as PitchType is not defined
                 */
                \Lsa\Xsl\Core\Validation\Types\Xsl\FrequencyType::class,
                /**
                 * Unused as VoiceFamily is not defined
                 */
                \Lsa\Xsl\Core\Validation\Types\Css\GenericVoiceType::class,
                /**
                 * Unused as ScalingValueCitation is not defined
                 */
                \Lsa\Xsl\Core\Validation\Types\IntrinsicScaleValueType::class,
            ]);
    }

    /**
     * Utility method to handle tags
     *
     * @param  \Lsa\Xsl\Core\Xsd\Fop\FopProfile  $profile  The profile
     */
    protected function targetTags(FopProfile $profile): void
    {
        $profile->target(
            Definition::class,
            fn ($self) => $self
                ->without([
                    /**
                     * These tags are not included in Apache FOP XSD
                     */
                    \Lsa\Xsl\Core\Tags\Bookmark\Bookmark::class,
                    \Lsa\Xsl\Core\Tags\Bookmark\BookmarkTitle::class,
                    \Lsa\Xsl\Core\Tags\Bookmark\BookmarkTree::class,
                    \Lsa\Xsl\Core\Tags\Other\ChangeBarBegin::class,
                    \Lsa\Xsl\Core\Tags\Other\ChangeBarEnd::class,
                    \Lsa\Xsl\Core\Tags\Other\RetrieveTableMarker::class,
                    \Lsa\Xsl\Core\Tags\Layout\FlowMap::class,
                    \Lsa\Xsl\Core\Tags\Inline\FolioPrefix::class,
                    \Lsa\Xsl\Core\Tags\Inline\FolioSuffix::class,
                    \Lsa\Xsl\Core\Tags\Indexing\IndexKeyReference::class,
                    \Lsa\Xsl\Core\Tags\Indexing\IndexPageCitationList::class,
                    \Lsa\Xsl\Core\Tags\Indexing\IndexPageCitationListSeparator::class,
                    \Lsa\Xsl\Core\Tags\Indexing\IndexPageCitationRangeSeparator::class,
                    \Lsa\Xsl\Core\Tags\Indexing\IndexPageNumberPrefix::class,
                    \Lsa\Xsl\Core\Tags\Indexing\IndexPageNumberSuffix::class,
                    \Lsa\Xsl\Core\Tags\Indexing\IndexRangeBegin::class,
                    \Lsa\Xsl\Core\Tags\Indexing\IndexRangeEnd::class,
                    \Lsa\Xsl\Core\Tags\Inline\PageNumberCitationLast::class,
                    \Lsa\Xsl\Core\Tags\Inline\ScalingValueCitation::class,
                    \Lsa\Xsl\Core\Tags\Layout\PageSequenceWrapper::class,
                ])
                /**
                 * These tags do not allow background-position
                 */
                ->for([
                    BasicLink::class,
                    Block::class,
                    BlockContainer::class,
                    Character::class,
                    ExternalGraphic::class,
                    InitialPropertySet::class,
                    Inline::class,
                    InlineContainer::class,
                    InstreamForeignObject::class,
                    Leader::class,
                    PageNumber::class,
                    PageNumberCitation::class,
                    RegionAfter::class,
                    RegionBefore::class,
                    RegionBody::class,
                    RegionEnd::class,
                    RegionStart::class,
                    Table::class,
                    TableAndCaption::class,
                    TableBody::class,
                    TableCaption::class,
                    TableCell::class,
                    TableColumn::class,
                    TableFooter::class,
                    TableHeader::class,
                    TableRow::class,
                    Title::class,
                ], fn ($definition) => $definition->denies('background-position'))
                /**
                 * Integer type is too restrictive for the specification, value can be floating point
                 * (even if it's still converted to a positive integer)
                 */
                ->for([
                    TableCell::class,
                ], fn ($definition) => $definition
                    ->replaceType('column-number', IntegerType::class)
                    ->replaceType('number-columns-spanned', IntegerType::class)
                    ->replaceType('number-rows-spanned', IntegerType::class)
                )
                ->for([
                    TableColumn::class,
                ], fn ($definition) => $definition
                    ->replaceType('column-number', IntegerType::class)
                    ->replaceType('number-columns-spanned', IntegerType::class)
                    ->replaceType('number-columns-repeated', IntegerType::class)
                )
                /**
                 * These tags do not allow id
                 */
                ->for([
                    FloatElement::class,
                    Flow::class,
                    Footnote::class,
                    FootnoteBody::class,
                    Root::class,
                    StaticContent::class,
                ], fn ($definition) => $definition->denies('id'))
                /**
                 * Apache FOP does not handle compound keep-with-next and keep-with-previous for now
                 */
                ->for([
                    Block::class,
                    BlockContainer::class,
                    Character::class,
                    ExternalGraphic::class,
                    Inline::class,
                    InlineContainer::class,
                    InstreamForeignObject::class,
                    Leader::class,
                    PageNumber::class,
                    PageNumberCitation::class,
                    BasicLink::class,
                    ListBlock::class,
                    ListItem::class,
                    Table::class,
                    TableAndCaption::class,
                    TableRow::class,
                ], fn ($definition) => $definition
                    ->denies(
                        'keep-with-next.within-column',
                        'keep-with-next.within-line',
                        'keep-with-next.within-page',
                        'keep-with-previous.within-column',
                        'keep-with-previous.within-line',
                        'keep-with-previous.within-page',
                    )
                )
                /**
                 * Apache FOP does not handle index-class and index-key for now
                 */
                ->for([
                    BasicLink::class,
                    BidiOverride::class,
                    Block::class,
                    BlockContainer::class,
                    Character::class,
                    ExternalGraphic::class,
                    FloatElement::class,
                    Flow::class,
                    Footnote::class,
                    FootnoteBody::class,
                    Inline::class,
                    InlineContainer::class,
                    InstreamForeignObject::class,
                    Leader::class,
                    ListBlock::class,
                    ListItem::class,
                    ListItemBody::class,
                    ListItemLabel::class,
                    MultiSwitch::class,
                    MultiCase::class,
                    MultiToggle::class,
                    MultiPropertySet::class,
                    PageNumber::class,
                    PageNumberCitation::class,
                    PageSequence::class,
                    Root::class,
                    StaticContent::class,
                    Table::class,
                    TableAndCaption::class,
                    TableBody::class,
                    TableCaption::class,
                    TableCell::class,
                    TableFooter::class,
                    TableHeader::class,
                    TableRow::class,
                    Wrapper::class,
                ], fn ($definition) => $definition->denies('index-class', 'index-key'))
                ->for([
                    Character::class,
                    ExternalGraphic::class,
                    InstreamForeignObject::class,
                    PageNumber::class,
                    PageNumberCitation::class,
                ], fn ($definition) => $definition
                    ->replaceType('keep-with-next', KeepIntegerType::class)
                    ->replaceType('keep-with-previous', KeepIntegerType::class)
                    ->allow(VerticalAlign::class)
                )
                ->for([
                    ExternalGraphic::class,
                    InstreamForeignObject::class,
                ], fn ($definition) => $definition
                    ->replaceType('content-width', ContentHeightType::class))
                ->for(
                    BasicLink::class,
                    fn ($definition) => $definition
                        ->replaceType('external-destination', StringType::class)
                )
                /**
                 * BidiOverride only allows vertical-align property, considered a shorthand in XSL-FO, but not
                 * related properties.
                 */
                ->for(
                    BidiOverride::class,
                    fn ($definition) => $definition
                        ->allow(new TypedAttribute('vertical-align', VerticalAlignType::class))
                )
                ->for(
                    Block::class,
                    fn ($definition) => $definition
                        ->denies('clear', 'xml:lang')
                )
                ->for(
                    BlockContainer::class,
                    fn ($definition) => $definition
                        ->denies('absolute-position', 'clear')
                )
                ->for(
                    Character::class,
                    fn ($definition) => $definition
                        ->denies('country', 'xml:lang')
                )
                ->for(
                    ColorProfile::class,
                    fn ($definition) => $definition
                        ->removeGroups()
                        ->allows([
                            InheritableProperties::class,
                        ])
                )
                ->for(
                    FloatElement::class,
                    fn ($definition) => $definition
                        ->addToMain(new FootnoteList())
                        ->addToMain(new FloatList())
                )
                ->for(
                    InitialPropertySet::class,
                    fn ($definition) => $definition
                        ->allow(new TypedAttribute('id', IdType::class))
                )
                ->for(
                    InlineContainer::class,
                    fn ($definition) => $definition
                        // In specification, one cannot use fo:block-container inside an
                        // inline-container. This list allows it anyway
                        ->mergeTagGroup(new BlockList())
                        // InlineContainer seems to disallow any inline element, which is weird
                        // As InlineContainer only allows a subset of InlineList, we first merge
                        // to remove any inline element allowed, then remove the InlineList
                        ->mergeTagGroup(new InlineList())
                        ->denyElement(InlineList::class)
                )
                ->for(
                    InstreamForeignObject::class,
                    fn ($definition) => $definition
                        ->denyElement(Any::class)
                        ->disallowAny()
                )
                ->for(
                    Leader::class,
                    fn ($definition) => $definition
                        ->mergeTagGroup(new InlineList())
                        ->replaceType('keep-with-next', KeepIntegerType::class)
                        ->replaceType('keep-with-previous', KeepIntegerType::class)
                )
                ->for(
                    ListBlock::class,
                    fn ($definition) => $definition
                        ->allow(ListProperties::class)
                        ->denyElement(Marker::class)
                        ->denies('clear', 'intrusion-displace')
                )
                ->for(
                    ListItem::class,
                    fn ($definition) => $definition
                        ->denyElement(Marker::class)
                        ->allows([
                            BreakProperties::class,
                            KeepProperties::class,
                            ListProperties::class,
                        ])
                        ->denies('relative-align')
                )
                ->for(
                    ListItemBody::class,
                    fn ($definition) => $definition
                        ->allow(ListProperties::class)
                )
                ->for(
                    ListItemLabel::class,
                    fn ($definition) => $definition
                        ->allow(ListProperties::class)
                )
                /**
                 * MultiToggle only allows vertical-align property, considered a shorthand in XSL-FO, but not
                 * related properties.
                 */
                ->for(
                    MultiToggle::class,
                    fn ($definition) => $definition
                        ->allow(new TypedAttribute('vertical-align', VerticalAlignType::class))
                )
                ->for(
                    MultiProperties::class,
                    fn ($definition) => $definition
                        ->allow(Id::class)
                )
                ->for(
                    PageSequence::class,
                    fn ($definition) => $definition
                        /**
                         * PageSequence does not allow flow-map-reference
                         */
                        ->denyElement(Flow::class)
                        ->addToMain(new Element(Flow::class))
                        ->denies('country', 'flow-map-reference')
                        ->replaceType('grouping-size', IntegerType::class)
                        ->replaceType('grouping-separator', CharacterType::class)
                )
                ->for(
                    [
                        /**
                         * RegionStart and RegionEnd should not allow precedence attribute
                         */
                        RegionStart::class,
                        RegionEnd::class,
                    ],
                    fn ($definition) => $definition
                        ->allow(Precedence::class)
                )
                ->for(
                    Root::class,
                    fn ($definition) => $definition
                        /**
                         * Root tag does not allow PageSequenceWrapper or BookmarkTree
                         */
                        ->denyElement(PageSequenceWrapper::class)
                        ->denyElement(BookmarkTree::class)
                        ->moveMain(PageSequence::class, null, 'unbounded')
                        /**
                         * Root tag should allow common accessibility properties
                         */
                        ->removeGroups()
                        ->allows([
                            InheritableProperties::class,
                        ])
                )
                ->for(
                    SimplePageMaster::class,
                    fn ($definition) => $definition
                        /**
                         * SimplePageMaster only allows one RegionBody
                         */
                        ->denyElement(RegionBody::class)
                        ->addToMain(new Element(RegionBody::class))
                        ->denyElement(BookmarkTree::class)
                        ->replaceType('page-width', LengthType::class)
                        ->replaceType('page-height', LengthType::class)
                )
                ->for(
                    Table::class,
                    fn ($definition) => $definition
                        ->denies(
                            'border-collapse',
                            'clear',
                            'intrusion-displace',
                            'writing-mode',
                            'border-separation'
                        )
                )
                ->for(
                    TableAndCaption::class,
                    fn ($definition) => $definition
                        ->denies('clear')
                )
                /**
                 * MultiToggle only allows vertical-align property, considered a shorthand in XSL-FO, but not
                 * related properties.
                 */
                ->for(
                    TableCell::class,
                    fn ($definition) => $definition
                        ->allow(new TypedAttribute('vertical-align', VerticalAlignType::class))
                        ->deny(InlineProgressionDimension::class)
                )
                /**
                 * Apache FOP allows these properties on TableRow
                 */
                ->for(
                    TableRow::class,
                    fn ($definition) => $definition
                        ->allows([
                            PageBreakAfter::class,
                            PageBreakBefore::class,
                        ])
                )
        );
    }
}
