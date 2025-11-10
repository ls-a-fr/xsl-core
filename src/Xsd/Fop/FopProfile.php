<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop;

use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xml\Utils\Validation\Definition;
use Lsa\Xml\Utils\Validation\Validators\CompoundValidator;
use Lsa\Xml\Utils\Validation\Xml\StringType;
use Lsa\Xml\Utils\Xml\Attribute as XmlAttribute;
use Lsa\Xml\Utils\Xml\Base\Tag;
use Lsa\Xml\Utils\Xml\CustomTag;
use Lsa\Xml\Utils\Xml\XmlNamespace;
use Lsa\Xsd\Generator\Base\Finder;
use Lsa\Xsd\Generator\Configuration\CustomType;
use Lsa\Xsd\Generator\Configuration\InheritableConfiguration;
use Lsa\Xsd\Generator\Finders\AddedTypesFinder;
use Lsa\Xsd\Generator\Finders\TagFinder;
use Lsa\Xsd\Generator\Finders\TypeFinder as FindersTypeFinder;
use Lsa\Xsd\Generator\Tags\Attribute;
use Lsa\Xsd\Generator\Tags\TagGroup;
use Lsa\Xsd\Generator\Tags\Type;
use Lsa\Xsd\Generator\Tags\Union;
use Lsa\Xsd\Generator\Transformers\AttributeTransformer;
use Lsa\Xsd\Generator\Transformers\Type\TypeTransformer;
use Lsa\Xsl\Core\Tags\Block\Block;
use Lsa\Xsl\Core\Tags\Block\BlockContainer;
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
use Lsa\Xsl\Core\Tags\Layout\Flow;
use Lsa\Xsl\Core\Tags\Layout\PageSequence;
use Lsa\Xsl\Core\Tags\Layout\RegionAfter;
use Lsa\Xsl\Core\Tags\Layout\RegionBefore;
use Lsa\Xsl\Core\Tags\Layout\RegionBody;
use Lsa\Xsl\Core\Tags\Layout\RegionEnd;
use Lsa\Xsl\Core\Tags\Layout\RegionStart;
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
use Lsa\Xsl\Core\Tags\Multi\MultiSwitch;
use Lsa\Xsl\Core\Tags\Multi\MultiToggle;
use Lsa\Xsl\Core\Tags\Other\Wrapper;
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
use Lsa\Xsl\Core\Validation\PropertyGroups\FontProperties;
use Lsa\Xsl\Core\Xml\Tag as FopTag;
use Lsa\Xsl\Core\Xsd\Fop\Exceptions\InvalidFopProfileModeException;
use Lsa\Xsl\Core\Xsd\Fop\Finders\AttributeGroupFinder;
use Lsa\Xsl\Core\Xsd\Fop\Finders\TagGroupFinder;
use Lsa\Xsl\Core\Xsd\Fop\Finders\TypeFinder;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\AbsolutePositionProperties;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\AccessibilityProperties;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\AuralProperties;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\BackgroundProperties;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\BlockHyphenationProperties;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\BlockProperties;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\BorderPaddingAndBackgroundProperties;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\BorderProperties;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\BreakProperties;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\ClipProperties;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\FontProperties as FopFontProperties;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\HyphenationProperties;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\InheritableProperties;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\IntrusionDisplaceProperties;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\KeepProperties;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\LineHeightProperties;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\MarginPropertiesBlock;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\MarginPropertiesInline;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\ProgressionProperties;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\ReferenceProperties;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\RelativePositionProperties;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\TextOneProperties;
use Lsa\Xsl\Core\Xsd\Fop\TagGroups\FloatList;
use Lsa\Xsl\Core\Xsd\Fop\TagGroups\FootnoteList;
use Lsa\Xsl\Core\Xsd\Fop\TagGroups\InitialPropertySetList;
use Lsa\Xsl\Core\Xsd\Fop\TagGroups\MarkerList;
use Lsa\Xsl\Core\Xsd\Fop\Tags\XsCompoundRestriction;
use Lsa\Xsl\Core\Xsd\Fop\Transformers\XsCompoundRestrictionTransformer;
use Lsa\Xsl\Core\Xsd\Xsl\XslProfile;
use RuntimeException;

// phpcs:disable Generic.Files.LineLength
/**
 * Profile used for Apache FOP XSD generation.
 * As Apache FOP XSD has several opinionated properties, this profile aims to convert validation rules
 * into a valid XSD file.
 *
 * Various replacements are made here:
 * - Attribute Groups: some groups are not referenced in XSL specification, others have different names,
 * and groups usually are splitted in two: FOP ones, and Not ones. The specification groups are not
 * used: Apache FOP groups were defined in this package (see PropertyGroups folder) and replacement is
 * done for each specification attribute group.
 * - Attributes: Many types were added and/or splitted: as an example, an enumeration with values of
 * 'auto' and 'inherit' would usually not be translated as an `<enumeration>` tag but rather as an
 * union tag, such as: `<union memberTypes="fo:auto_Type fo:inherit_Type">`. Common values used in
 * attributes like 'force', 'auto', 'inherit' are subject to these replacements. Moreover, some types
 * are available but unused. Several `<pattern>` tags have a base "string" even when no space are found
 * in the pattern. To comply with these rules, many types are replaced with transformers, with custom
 * types written in this package (see Types folder), or are rewritten in this file.
 * - Tag Groups: as attribute groups, tag groups usually are splitted in two: FOP ones, and Not ones.
 * The specification groups are not used: Apache FOP groups were defined in this package (see TagGroups
 * folder) and replacement is done for each specification tag group.
 * - Tags: to comply with custom attribute and/or tag groups, tags are slightly changed here. These
 * modifications should not allow or deny any attribute available on this tag.
 *
 * Compared to XSL specification, Apache FOP XSD has some minor edits:
 * - Few attributes are unavailable
 * - Several types are considered string albeit it could be stricter
 * - Few tags are unavailable
 * - Few enumerations are either a subset or a superset of the spec
 *
 * This profile comes in two flavors:
 * - SPECIFICATION_FOLLOW: should stick solely on XSL specification. Generated XSD won't comply with FOP XSD.
 * - SPECIFICATION_EXTENSION: should apply edits. Generated XSD will comply with FOP XSD.
 */
class FopProfile extends XslProfile
{
    /**
     * Should stick solely on XSL specification. Generated XSD won't comply with FOP XSD.
     */
    public const SPECIFICATION_FOLLOW = 1;

    /**
     * Should apply edits. Generated XSD will comply with FOP XSD.
     */
    public const SPECIFICATION_EXTENSION = 2;

    /**
     * Mode used, either SPECIFICATION_FOLLOW or SPECIFICATION_EXTENSION
     * Default is SPECIFICATION_FOLLOW.
     */
    public readonly int $mode;

    /**
     * Creates a new FopProfile
     *
     * @param  int  $mode  The specification to follow
     *
     * @throws \Lsa\Xsl\Core\Xsd\Fop\Exceptions\InvalidFopProfileModeException
     */
    public function __construct(int $mode = self::SPECIFICATION_FOLLOW)
    {
        switch ($mode) {
            case self::SPECIFICATION_EXTENSION:
            case self::SPECIFICATION_FOLLOW:
                $this->mode = $mode;
                break;
            default:
                throw new InvalidFopProfileModeException('Invalid mode, should be either SPECIFICATION_EXTENSION or SPECIFICATION_FOLLOW');
        }
        parent::__construct();
    }

    public function getSchema(): Tag
    {
        return (new CustomTag('schema'))
            ->namespace(new XmlNamespace('fo', 'http://www.w3.org/1999/XSL/Format'))
            ->namespace(new XmlNamespace('xs', 'http://www.w3.org/2001/XMLSchema'))
            ->attributes([
                new XmlAttribute('xmlns', 'http://www.w3.org/2001/XMLSchema'),
                new XmlAttribute('targetNamespace', 'http://www.w3.org/1999/XSL/Format'),
                new XmlAttribute('elementFormDefault', 'qualified'),
            ]);
    }

    public function execute(): void
    {
        if ($this->isExecuted === true) {
            return;
        }

        parent::execute();

        /**
         * These types are considered string.
         * This mean:
         * - Any `<attribute>` based on this type will be written `type="xs:string"`
         * - The `<simpleType>` will not exist in XSD
         */
        $this->considerString([
            \Lsa\Xsl\Core\Validation\Types\ColorProfileNameType::class,
            \Lsa\Xsl\Core\Validation\Types\ContentTypeType::class,
            \Lsa\Xsl\Core\Validation\Types\FontType::class,
            \Lsa\Xsl\Core\Validation\Types\FlowMapNameType::class,
            \Lsa\Xsl\Core\Validation\Types\FlowMapReferenceType::class,
            \Lsa\Xsl\Core\Validation\Types\FlowNameType::class,
            \Lsa\Xsl\Core\Validation\Types\FlowNameReferenceType::class,
            \Lsa\Xsl\Core\Validation\Types\MasterNameType::class,
            \Lsa\Xsl\Core\Validation\Types\MasterReferenceType::class,
            \Lsa\Xsl\Core\Validation\Types\RefIndexKeyType::class,
            \Lsa\Xsl\Core\Validation\Types\RegionNameType::class,
            \Lsa\Xsl\Core\Validation\Types\RegionNameReferenceType::class,
            \Lsa\Xsl\Core\Validation\Types\RetrieveClassNameType::class,
            \Lsa\Xsl\Core\Validation\Types\RoleType::class,
            \Lsa\Xsl\Core\Validation\Types\ScriptType::class,
            \Lsa\Xsl\Core\Validation\Types\SwitchToType::class,
            \Lsa\Xml\Utils\Validation\Xml\NcNameType::class,
        ])
            /**
             * This type has a specific case, rename it
             */
            ->rename(
                \Lsa\Xsl\Core\Validation\Types\Icc\ColorNameType::class,
                'color_Name_Type'
            );

        $this->targetPropertyGroups();
        $this->targetAttributes();
        $this->targetTypes();
        $this->targetTagGroups();
        $this->targetTags();

        // Allow FOP extension profile
        if ($this->mode === self::SPECIFICATION_EXTENSION) {
            (new FopExtensionProfile())->execute($this);
        }
    }

    /**
     * Utility method to handle every tag replacement
     */
    protected function targetTags(): void
    {
        $this->target(
            Definition::class,
            fn ($self) => $self
                ->for(
                    [
                        Block::class,
                        BlockContainer::class,
                        BidiOverride::class,
                        Inline::class,
                        InlineContainer::class,
                        Flow::class,
                        TableCaption::class,
                        TableCell::class,
                        ListItemBody::class,
                        ListItemLabel::class,
                        BasicLink::class,
                        Wrapper::class,
                    ],
                    fn ($definition) => $definition
                        ->denyElement(\Lsa\Xsl\Core\Tags\Other\Marker::class)
                        ->addToMain(new MarkerList())
                )
                /**
                 * InitialPropertySet element is always called with its single-entry group,
                 * "InitialPropertySetList"
                 */
                ->for(
                    Block::class,
                    fn ($definition) => $definition
                        ->denyElement(InitialPropertySet::class)
                        ->addToMain(new InitialPropertySetList())
                )
                /**
                 * Float and Footnote elements are always called with their respective single-entry
                 * groups, "FloatList" and "FootnoteList"
                 */
                ->for(
                    [
                        Block::class,
                        BlockContainer::class,
                        BidiOverride::class,
                        Inline::class,
                        InlineContainer::class,
                        StaticContent::class,
                        Flow::class,
                        TableCaption::class,
                        TableCell::class,
                        ListItemBody::class,
                        ListItemLabel::class,
                        FootnoteBody::class,
                        BasicLink::class,
                        Wrapper::class,
                        MultiCase::class,
                        MultiToggle::class,
                    ],
                    fn ($definition) => $definition
                        ->denyElements([
                            \Lsa\Xsl\Core\Tags\OutOfLine\FloatElement::class,
                            \Lsa\Xsl\Core\Tags\OutOfLine\Footnote::class,
                        ])
                        ->addToMain([
                            new FloatList(),
                            new FootnoteList(),
                        ])
                )
                /**
                 * Next replacements allow specific attribute groups to be available on these tags.
                 * Note: these attributes already exist on their corresponding tag. This replacement
                 * is performed solely to comply with Apache FOP XSD.
                 */
                ->for(
                    BasicLink::class,
                    fn ($definition) => $definition
                        ->removeGroups()
                        ->allows([
                            InheritableProperties::class,
                            AccessibilityProperties::class,
                            AuralProperties::class,
                            BorderPaddingAndBackgroundProperties::class,
                            MarginPropertiesInline::class,
                            RelativePositionProperties::class,
                        ])
                )
                ->for(
                    BidiOverride::class,
                    fn ($definition) => $definition
                        ->removeGroups()
                        ->allows([
                            InheritableProperties::class,
                            AuralProperties::class,
                            RelativePositionProperties::class,
                            FopFontProperties::class,
                        ])
                )
                ->for(
                    Block::class,
                    fn ($definition) => $definition
                        ->removeGroups()
                        ->allows([
                            InheritableProperties::class,
                            AccessibilityProperties::class,
                            AuralProperties::class,
                            BorderPaddingAndBackgroundProperties::class,
                            FontProperties::class,
                            HyphenationProperties::class,
                            MarginPropertiesBlock::class,
                            RelativePositionProperties::class,
                            BlockHyphenationProperties::class,
                            LineHeightProperties::class,
                            TextOneProperties::class,
                        ])
                )
                ->for(
                    BlockContainer::class,
                    fn ($definition) => $definition
                        ->removeGroups()
                        ->allows([
                            InheritableProperties::class,
                            AbsolutePositionProperties::class,
                            BorderPaddingAndBackgroundProperties::class,
                            MarginPropertiesBlock::class,
                        ])
                )
                ->for(
                    Character::class,
                    fn ($definition) => $definition
                        ->removeGroups()
                        ->allows([
                            InheritableProperties::class,
                            AuralProperties::class,
                            BorderPaddingAndBackgroundProperties::class,
                            FontProperties::class,
                            HyphenationProperties::class,
                            MarginPropertiesInline::class,
                            RelativePositionProperties::class,
                        ])
                )
                ->for(
                    ExternalGraphic::class,
                    fn ($definition) => $definition
                        ->removeGroups()
                        ->allows([
                            InheritableProperties::class,
                            AccessibilityProperties::class,
                            AuralProperties::class,
                            BorderPaddingAndBackgroundProperties::class,
                            MarginPropertiesInline::class,
                            RelativePositionProperties::class,
                        ])
                )
                ->for([
                    Footnote::class,
                    FootnoteBody::class,
                ], fn ($definition) => $definition
                    ->removeGroups()
                    ->allows([
                        InheritableProperties::class,
                        AccessibilityProperties::class,
                    ]))
                ->for([
                    InitialPropertySet::class,
                ], fn ($definition) => $definition
                    ->removeGroups()
                    ->allows([
                        InheritableProperties::class,
                        AccessibilityProperties::class,
                        AuralProperties::class,
                        BorderPaddingAndBackgroundProperties::class,
                        FontProperties::class,
                        RelativePositionProperties::class,
                    ]))
                ->for([
                    Inline::class,
                ], fn ($definition) => $definition
                    ->removeGroups()
                    ->allows([
                        InheritableProperties::class,
                        AccessibilityProperties::class,
                        AuralProperties::class,
                        BorderPaddingAndBackgroundProperties::class,
                        FontProperties::class,
                        MarginPropertiesInline::class,
                        RelativePositionProperties::class,
                    ]))
                ->for([
                    InlineContainer::class,
                ], fn ($definition) => $definition
                    ->removeGroups()
                    ->allows([
                        InheritableProperties::class,
                        BorderPaddingAndBackgroundProperties::class,
                        MarginPropertiesInline::class,
                        RelativePositionProperties::class,
                    ]))
                ->for([
                    InstreamForeignObject::class,
                ], fn ($definition) => $definition
                    ->removeGroups()
                    ->allows([
                        InheritableProperties::class,
                        AccessibilityProperties::class,
                        AuralProperties::class,
                        BorderPaddingAndBackgroundProperties::class,
                        MarginPropertiesInline::class,
                        RelativePositionProperties::class,
                    ]))
                ->for([
                    Leader::class,
                ], fn ($definition) => $definition
                    ->removeGroups()
                    ->allows([
                        InheritableProperties::class,
                        AccessibilityProperties::class,
                        AuralProperties::class,
                        BorderPaddingAndBackgroundProperties::class,
                        FontProperties::class,
                        MarginPropertiesInline::class,
                        RelativePositionProperties::class,
                    ]))
                ->for([
                    ListBlock::class,
                    ListItem::class,
                ], fn ($definition) => $definition
                    ->removeGroups()
                    ->allows([
                        InheritableProperties::class,
                        AccessibilityProperties::class,
                        AuralProperties::class,
                        BorderPaddingAndBackgroundProperties::class,
                        MarginPropertiesBlock::class,
                        RelativePositionProperties::class,
                    ]))
                ->for([
                    ListItemBody::class,
                    ListItemLabel::class,
                    MultiCase::class,
                    MultiProperties::class,
                    MultiSwitch::class,
                    MultiToggle::class,
                ], fn ($definition) => $definition
                    ->removeGroups()
                    ->allows([
                        InheritableProperties::class,
                        AccessibilityProperties::class,
                    ]))
                ->for([
                    PageNumber::class,
                    PageNumberCitation::class,
                ], fn ($definition) => $definition
                    ->removeGroups()
                    ->allows([
                        InheritableProperties::class,
                        AccessibilityProperties::class,
                        AuralProperties::class,
                        BorderPaddingAndBackgroundProperties::class,
                        FontProperties::class,
                        MarginPropertiesInline::class,
                        RelativePositionProperties::class,
                    ]))
                ->for([
                    PageSequence::class,
                ], fn ($definition) => $definition
                    ->removeGroups()
                    ->allows([
                        InheritableProperties::class,
                    ]))
                ->for([
                    RegionAfter::class,
                    RegionBefore::class,
                    RegionEnd::class,
                    RegionStart::class,
                ], fn ($definition) => $definition
                    ->removeGroups()
                    ->allows([
                        InheritableProperties::class,
                        BorderPaddingAndBackgroundProperties::class,
                    ]))
                ->for([
                    RegionBody::class,
                ], fn ($definition) => $definition
                    ->removeGroups()
                    ->allows([
                        InheritableProperties::class,
                        MarginPropertiesBlock::class,
                        BorderPaddingAndBackgroundProperties::class,
                    ]))
                ->for([
                    SimplePageMaster::class,
                ], fn ($definition) => $definition
                    ->removeGroups()
                    ->allows([
                        InheritableProperties::class,
                        MarginPropertiesBlock::class,
                    ]))
                ->for([
                    Table::class,
                    TableAndCaption::class,
                ], fn ($definition) => $definition
                    ->removeGroups()
                    ->allows([
                        InheritableProperties::class,
                        AccessibilityProperties::class,
                        AuralProperties::class,
                        BorderPaddingAndBackgroundProperties::class,
                        MarginPropertiesBlock::class,
                        RelativePositionProperties::class,
                    ]))
                ->for([
                    TableBody::class,
                    TableFooter::class,
                    TableHeader::class,
                    TableRow::class,
                ], fn ($definition) => $definition
                    ->removeGroups()
                    ->allows([
                        InheritableProperties::class,
                        AccessibilityProperties::class,
                        AuralProperties::class,
                        RelativePositionProperties::class,
                        BorderProperties::class,
                        BackgroundProperties::class,
                    ]))
                ->for([
                    TableCaption::class,
                ], fn ($definition) => $definition
                    ->removeGroups()
                    ->allows([
                        InheritableProperties::class,
                        AccessibilityProperties::class,
                        AuralProperties::class,
                        BorderPaddingAndBackgroundProperties::class,
                        RelativePositionProperties::class,
                    ]))
                ->for([
                    TableCell::class,
                ], fn ($definition) => $definition
                    ->removeGroups()
                    ->allows([
                        InheritableProperties::class,
                        AccessibilityProperties::class,
                        AuralProperties::class,
                        BorderPaddingAndBackgroundProperties::class,
                        RelativePositionProperties::class,
                        ProgressionProperties::class,
                    ]))
                ->for([
                    TableColumn::class,
                ], fn ($definition) => $definition
                    ->removeGroups()
                    ->allows([
                        InheritableProperties::class,
                        BorderProperties::class,
                        BackgroundProperties::class,
                    ]))
                ->for([
                    Title::class,
                ], fn ($definition) => $definition
                    ->removeGroups()
                    ->allows([
                        InheritableProperties::class,
                        AccessibilityProperties::class,
                        AuralProperties::class,
                        BorderPaddingAndBackgroundProperties::class,
                        FontProperties::class,
                        MarginPropertiesInline::class,
                    ]))
                /**
                 * Next replacements allow smaller groups.
                 * Note: these attributes already exist on their corresponding tag. This replacement
                 * is performed solely to comply with Apache FOP XSD.
                 */
                ->for([
                    Block::class,
                    BlockContainer::class,
                    TableAndCaption::class,
                    Table::class,
                ], fn ($definition) => $definition->allow(BlockProperties::class))
                ->for([
                    BlockContainer::class,
                    InlineContainer::class,
                    RegionBody::class,
                    RegionBefore::class,
                    RegionAfter::class,
                    RegionStart::class,
                    RegionEnd::class,
                    SimplePageMaster::class,
                ], fn ($definition) => $definition->allow(ReferenceProperties::class))
                ->for([
                    BlockContainer::class,
                    ExternalGraphic::class,
                    InlineContainer::class,
                    InstreamForeignObject::class,
                    RegionBefore::class,
                    RegionAfter::class,
                    RegionBody::class,
                    RegionStart::class,
                    RegionEnd::class,
                ], fn ($definition) => $definition->allow(ClipProperties::class))
                ->for([
                    BlockContainer::class,
                    ExternalGraphic::class,
                    InstreamForeignObject::class,
                    TableCaption::class,
                    Table::class,
                    Inline::class,
                    InlineContainer::class,
                ], fn ($definition) => $definition->allow(ProgressionProperties::class))
                ->for([
                    BasicLink::class,
                    Block::class,
                    BlockContainer::class,
                    Inline::class,
                    InlineContainer::class,
                    ListBlock::class,
                    Table::class,
                    TableAndCaption::class,
                    TableRow::class,
                ], fn ($definition) => $definition->allow(KeepProperties::class))
                ->for([
                    Block::class,
                    BlockContainer::class,
                    ListBlock::class,
                    Table::class,
                    TableAndCaption::class,
                    TableRow::class,
                ], fn ($definition) => $definition->allow(BreakProperties::class))
                ->for([
                    Block::class,
                    BlockContainer::class,
                    TableAndCaption::class,
                    TableCaption::class,
                    Table::class,
                    ListBlock::class,
                    ListItem::class,
                ], fn ($definition) => $definition->allow(IntrusionDisplaceProperties::class))
                ->for([
                    Leader::class,
                    PageNumber::class,
                    PageNumberCitation::class,
                    Character::class,
                ], fn ($definition) => $definition->allow(TextOneProperties::class))
        );
    }

    /**
     * Utility method to handle every tag group replacement
     */
    protected function targetTagGroups(): void
    {
        $this->target(TagGroup::class)
            /**
             * ChangeBarBegin and ChangeBarEnd does not exist in Apache FOP XSD
             */
            ->without(\Lsa\Xsl\Core\Validation\TagGroups\PointGroup::class)
            /**
             * These groups are defined with FOP and Not
             */
            ->replaceMap([
                [\Lsa\Xsl\Core\Validation\TagGroups\BlockGroup::class,   \Lsa\Xsl\Core\Xsd\Fop\TagGroups\BlockList::class],
                [\Lsa\Xsl\Core\Validation\TagGroups\InlineGroup::class,  \Lsa\Xsl\Core\Xsd\Fop\TagGroups\InlineList::class],
                [\Lsa\Xsl\Core\Validation\TagGroups\NeutralGroup::class, \Lsa\Xsl\Core\Xsd\Fop\TagGroups\NeutralList::class],
            ]);
    }

    /**
     * Utility method to handle every type replacement
     */
    protected function targetTypes(): void
    {
        /**
         * Several `<simpleType>` have a "string" base instead of what could be "NMTOKEN" base.
         */
        $this->nmtokenToString([
            \Lsa\Xsl\Core\Validation\Types\FontVariantType::class,
        ])
            ->target(Type::class)
            /**
             * Several types are structured in a specific manner:
             * - Some are an union of enumerations
             * - Some uses InheritType, NoneType, AutoType and others
             * - Some are coalesced to another type to reduce XSD size
             * - ...
             */
            ->rename(\Lsa\Xsl\Core\Validation\Types\IntrusionDisplaceType::class, 'displace_Type')
            ->replaceMap([
                [\Lsa\Xsl\Core\Validation\Types\AlignmentAdjustType::class,      \Lsa\Xsl\Core\Xsd\Fop\Types\AlignmentAdjustType::class],
                [\Lsa\Xsl\Core\Validation\Types\AlignmentBaselineType::class,    \Lsa\Xsl\Core\Xsd\Fop\Types\AlignmentBaselineType::class],
                [\Lsa\Xsl\Core\Validation\Types\Xsl\AngleType::class,    \Lsa\Xsl\Core\Xsd\Fop\Types\AngleType::class],
                [\Lsa\Xsl\Core\Validation\Types\AzimuthType::class,              \Lsa\Xsl\Core\Xsd\Fop\Types\AzimuthType::class],
                [\Lsa\Xsl\Core\Validation\Types\BackgroundColorType::class,      \Lsa\Xsl\Core\Xsd\Fop\Types\BackgroundColorType::class],
                [\Lsa\Xsl\Core\Validation\Types\BackgroundImageType::class,      \Lsa\Xsl\Core\Xsd\Fop\Types\BackgroundImageType::class],
                [\Lsa\Xsl\Core\Validation\Types\BackgroundPositionHorizontalType::class, \Lsa\Xsl\Core\Xsd\Fop\Types\BackgroundPositionHorizontalType::class],
                [\Lsa\Xsl\Core\Validation\Types\BackgroundPositionType::class,   \Lsa\Xsl\Core\Xsd\Fop\Types\BackgroundPositionType::class],
                [\Lsa\Xsl\Core\Validation\Types\BackgroundPositionVerticalType::class, \Lsa\Xsl\Core\Xsd\Fop\Types\BackgroundPositionVerticalType::class],
                [\Lsa\Xsl\Core\Validation\Types\BaselineShiftType::class,        \Lsa\Xsl\Core\Xsd\Fop\Types\BaselineShiftType::class],
                [\Lsa\Xsl\Core\Validation\Types\BorderAbsoluteWidthType::class,          \Lsa\Xsl\Core\Xsd\Fop\Types\BorderTopWidthType::class],
                [\Lsa\Xsl\Core\Validation\Types\BorderMultiColorType::class,     \Lsa\Xsl\Core\Xsd\Fop\Types\BorderColorType::class],
                [\Lsa\Xsl\Core\Validation\Types\BorderMultiStyleType::class,           \Lsa\Xsl\Core\Xsd\Fop\Types\BorderMultiStyleType::class],
                [\Lsa\Xsl\Core\Validation\Types\BorderRelativeWidthType::class,    \Lsa\Xsl\Core\Xsd\Fop\Types\BorderBeforeWidthType::class],
                [\Lsa\Xsl\Core\Validation\Types\BorderSpacingType::class,    \Lsa\Xsl\Core\Xsd\Fop\Types\LengthType::class],
                [\Lsa\Xsl\Core\Validation\Types\BorderType::class,           \Lsa\Xsl\Core\Xsd\Fop\Types\BorderType::class],
                [\Lsa\Xsl\Core\Validation\Types\CharacterType::class,             \Lsa\Xsl\Core\Xsd\Fop\Types\CharacterType::class],
                [\Lsa\Xsl\Core\Validation\Types\ClipType::class,          \Lsa\Xsl\Core\Xsd\Fop\Types\ClipType::class],
                [\Lsa\Xsl\Core\Validation\Types\Xsl\ColorHexType::class,         \Lsa\Xsl\Core\Xsd\Fop\Types\ColorHexType::class],
                [\Lsa\Xsl\Core\Validation\Types\ColorType::class,         \Lsa\Xsl\Core\Xsd\Fop\Types\ColorType::class],
                [\Lsa\Xsl\Core\Validation\Types\ColumnWidthType::class,          \Lsa\Xsl\Core\Xsd\Fop\Types\ColumnWidthType::class],
                [
                    [\Lsa\Xsl\Core\Validation\Types\ContentHeightType::class, \Lsa\Xsl\Core\Validation\Types\ContentWidthType::class],
                    \Lsa\Xsl\Core\Xsd\Fop\Types\ContentHeightType::class,
                ],
                [\Lsa\Xsl\Core\Validation\Types\DominantBaselineType::class,         \Lsa\Xsl\Core\Xsd\Fop\Types\DominantBaselineType::class],
                [\Lsa\Xsl\Core\Validation\Types\ElevationType::class,            \Lsa\Xsl\Core\Xsd\Fop\Types\ElevationType::class],
                [\Lsa\Xsl\Core\Validation\Types\FontFamilyType::class, \Lsa\Xsl\Core\Xsd\Fop\Types\FamilyNameType::class],
                [\Lsa\Xsl\Core\Validation\Types\FontSizeType::class,             \Lsa\Xsl\Core\Xsd\Fop\Types\FontSizeType::class],
                [\Lsa\Xsl\Core\Validation\Types\HyphenationCharacterType::class,             \Lsa\Xsl\Core\Xsd\Fop\Types\HyphenationCharacterType::class],
                [\Lsa\Xsl\Core\Validation\Types\HeightType::class,               \Lsa\Xsl\Core\Xsd\Fop\Types\HeightType::class],
                [\Lsa\Xsl\Core\Validation\Types\Iso639\LanguageType::class,           \Lsa\Xsl\Core\Xsd\Fop\Types\LanguageType::class],
                [\Lsa\Xsl\Core\Validation\Types\LeaderLengthType::class,          \Lsa\Xsl\Core\Xsd\Fop\Types\LeaderLengthType::class],
                [\Lsa\Xsl\Core\Validation\Types\LineHeightType::class,           \Lsa\Xsl\Core\Xsd\Fop\Types\LineHeightType::class],
                [\Lsa\Xsl\Core\Validation\Types\MaxWidthType::class,           \Lsa\Xsl\Core\Xsd\Fop\Types\MaxWidthType::class],
                [\Lsa\Xsl\Core\Validation\Types\Xsl\KeepIntegerType::class,          \Lsa\Xsl\Core\Xsd\Fop\Types\KeepIntegerType::class],
                [
                    [
                        \Lsa\Xsl\Core\Validation\Types\Xsl\NumberType::class,
                        \Lsa\Xsl\Core\Validation\Types\PositiveNumberType::class,
                    ],
                    \Lsa\Xsl\Core\Xsd\Fop\Types\NumberType::class,
                ],
                [\Lsa\Xsl\Core\Validation\Types\PaddingAbsoluteType::class,           \Lsa\Xsl\Core\Xsd\Fop\Types\PaddingTopType::class],
                [\Lsa\Xsl\Core\Validation\Types\PaddingRelativeType::class,        \Lsa\Xsl\Core\Xsd\Fop\Types\PaddingBeforeType::class],
                [
                    [
                        \Lsa\Xsl\Core\Validation\Types\Xsl\PercentageType::class,
                        \Lsa\Xsl\Core\Validation\Types\Xsl\PositivePercentageType::class,
                    ],
                    \Lsa\Xsl\Core\Xsd\Fop\Types\PercentageType::class,
                ],
                [\Lsa\Xsl\Core\Validation\Types\PositiveLengthType::class,       \Lsa\Xsl\Core\Xsd\Fop\Types\PositiveLengthType::class],
                [\Lsa\Xsl\Core\Validation\Types\SizeType::class,                 \Lsa\Xsl\Core\Xsd\Fop\Types\SizeType::class],
                [
                    [
                        \Lsa\Xsl\Core\Validation\Types\Xsl\SpaceType::class,
                        \Lsa\Xsl\Core\Validation\Types\SpaceAfterType::class,
                        \Lsa\Xsl\Core\Validation\Types\SpaceBeforeType::class,
                        \Lsa\Xsl\Core\Validation\Types\Xsl\PositiveSpaceType::class,
                    ],
                    \Lsa\Xsl\Core\Xsd\Fop\Types\SpaceType::class,
                ],
                [\Lsa\Xsl\Core\Validation\Types\SpeechRateType::class,           \Lsa\Xsl\Core\Xsd\Fop\Types\SpeechRateType::class],
                [\Lsa\Xsl\Core\Validation\Types\TextDecorationType::class,           \Lsa\Xsl\Core\Xsd\Fop\Types\TextDecorationType::class],
                [\Lsa\Xsl\Core\Validation\Types\TextShadowType::class,           \Lsa\Xsl\Core\Xsd\Fop\Types\TextShadowType::class],
                [\Lsa\Xsl\Core\Validation\Types\VerticalAlignType::class,        \Lsa\Xsl\Core\Xsd\Fop\Types\VerticalAlignType::class],
                [\Lsa\Xsl\Core\Validation\Types\Functions\ProportionalColumnWidthType::class, \Lsa\Xsl\Core\Xsd\Fop\Types\ProportionalColumnWidthType::class],
            ])
            // Not supported as the specification says
            ->without([
                \Lsa\Xsl\Core\Validation\Types\Rfc5646\LanguageType::class,
                \Lsa\Xsl\Core\Validation\Types\Iso639\SublanguageType::class,
            ])
            ->without([
                /**
                 * Never used as InheritedProperties is replaced with InheritableProperties
                 */
                \Lsa\Xsl\Core\Validation\Types\AllowedHeightScaleType::class,
                /**
                 * Never used as InheritedProperties is replaced with InheritableProperties
                 */
                \Lsa\Xsl\Core\Validation\Types\AllowedWidthScaleType::class,
                /**
                 * Never used as BackgroundPositionType is replaced by FOP BackgroundPositionBaseType
                 */
                \Lsa\Xsl\Core\Validation\Types\Xsl\BackgroundPositionTextType::class,
                /**
                 * Replaced by FOP MarginWidthType
                 */
                \Lsa\Xsl\Core\Validation\Types\BlockProgressionDimensionType::class,
                /**
                 * Replaced by FOP BorderTopWidth
                 */
                \Lsa\Xsl\Core\Validation\Types\BorderAbsoluteWidthType::class,
                /**
                 * Unused as BorderMultiColorType is replaced by FOP BorderColorType
                 */
                \Lsa\Xsl\Core\Validation\Types\BorderColorType::class,
                /**
                 * Replaced by FOP BorderMarginWidthType
                 */
                \Lsa\Xsl\Core\Validation\Types\BorderMultiWidthType::class,
                /**
                 * Replaced by FOP BorderTopType and BorderBeforeWidthType
                 */
                \Lsa\Xsl\Core\Validation\Types\Css\BorderWidthType::class,
                /**
                 * Never used as BaseColorType does not allow rgb
                 */
                \Lsa\Xsl\Core\Validation\Types\Functions\ColorRgbType::class,
                /**
                 * Never used as BaseColorType does not allow rgb-icc
                 */
                \Lsa\Xsl\Core\Validation\Types\Functions\ColorRgbIccType::class,
                /**
                 * Never used as StartIndentType does not allow body-start
                 */
                \Lsa\Xsl\Core\Validation\Types\Functions\BodyStartType::class,
                /**
                 * Never used as EndIndentType does not allow label-end
                 */
                \Lsa\Xsl\Core\Validation\Types\Functions\LabelEndType::class,
                /**
                 * Never used as CueType is considered string
                 */
                \Lsa\Xsl\Core\Validation\Types\CueSingleType::class,
                /**
                 * Never used as FontFamilyType is replaced by FOP FamilyNameType
                 */
                \Lsa\Xsl\Core\Validation\Types\Xsl\FamilyNameType::class,
                /**
                 * Never used as FontFamilyType is replaced by FOP FamilyNameType
                 */
                \Lsa\Xsl\Core\Validation\Types\Xsl\GenericFamilyType::class,
                /**
                 * Replaced by FOP OrientationType
                 */
                \Lsa\Xsl\Core\Validation\Types\GlyphOrientationHorizontalType::class,
                /**
                 * Replaced by FOP OrientationType
                 */
                \Lsa\Xsl\Core\Validation\Types\GlyphOrientationVerticalType::class,
                /**
                 * Replaced by IntegerType
                 */
                \Lsa\Xsl\Core\Validation\Types\HyphenationCharacterCountType::class,
                /**
                 * Replaced by FOP MarginWidthType
                 */
                \Lsa\Xsl\Core\Validation\Types\InlineProgressionDimensionType::class,
                /**
                 * Replaced by FOP KeepIntegerType
                 */
                \Lsa\Xsl\Core\Validation\Types\Xsl\KeepType::class,
                /**
                 * Replaced by FOP MarginWidthType
                 */
                \Lsa\Xsl\Core\Validation\Types\Css\MarginWidthType::class,
                /**
                 * Replaced by StartIndentType
                 */
                \Lsa\Xsl\Core\Validation\Types\MinHeightType::class,
                /**
                 * Replaced by StartIndentType
                 */
                \Lsa\Xsl\Core\Validation\Types\MinWidthType::class,
                /**
                 * Replaced by FOP PaddingTopType
                 */
                \Lsa\Xsl\Core\Validation\Types\PaddingAbsoluteType::class,
                /**
                 * Replaced by FOP PaddingBeforeType
                 */
                \Lsa\Xsl\Core\Validation\Types\PaddingRelativeType::class,
                /**
                 * Replaced by PageBreakAfterType
                 */
                \Lsa\Xsl\Core\Validation\Types\PageBreakBeforeType::class,
                /**
                 * Replaced by LengthType
                 */
                \Lsa\Xsl\Core\Validation\Types\PageHeightType::class,
                /**
                 * Replaced by LengthType
                 */
                \Lsa\Xsl\Core\Validation\Types\PageWidthType::class,
                /**
                 * Considered string
                 */
                \Lsa\Xsl\Core\Validation\Types\PauseAfterType::class,
                /**
                 * Considered string
                 */
                \Lsa\Xsl\Core\Validation\Types\PauseBeforeType::class,
                /**
                 * Considered string
                 */
                \Lsa\Xsl\Core\Validation\Types\PauseType::class,
                /**
                 * Unused as ClipType is replaced by FOP ClipType
                 */
                \Lsa\Xsl\Core\Validation\Types\Xsl\ShapeType::class,
                /**
                 * Considered string
                 */
                \Lsa\Xsl\Core\Validation\Types\Css\SpecificVoiceType::class,
                /**
                 * Replaced by HeightType
                 */
                \Lsa\Xsl\Core\Validation\Types\WidthType::class,
            ])->without([
                /**
                 * Unused types.
                 * These won't break an XSD generation, but would create a lot of unused simpleType tags.
                 */
                \Lsa\Xsl\Core\Validation\Types\WordSpacingType::class,
                \Lsa\Xsl\Core\Validation\Types\Xsl\TimeType::class,
                \Lsa\Xsl\Core\Validation\Types\Xsl\PositivePercentageType::class,
                \Lsa\Xsl\Core\Validation\Types\Xsl\SpacePrecedenceType::class,
                \Lsa\Xsl\Core\Validation\Types\Xsl\BaseColorType::class,
                \Lsa\Xsl\Core\Validation\Types\MarginType::class,
                \Lsa\Xsl\Core\Validation\Types\MaxHeightType::class,
                \Lsa\Xsl\Core\Validation\Types\Xsl\FontStyleLimitedType::class,
                \Lsa\Xsl\Core\Validation\Types\Xsl\FontWeightLimitedType::class,
                \Lsa\Xsl\Core\Validation\Types\PaddingType::class,
                \Lsa\Xsl\Core\Validation\Types\ReferenceOrientationType::class,
                \Lsa\Xsl\Core\Validation\Types\SpaceEndType::class,
                \Lsa\Xml\Utils\Validation\Xml\StringType::class,
                \Lsa\Xsl\Core\Validation\Types\TextIndentType::class,
            ]);
    }

    /**
     * Utility method to handle every attribute group replacement
     */
    protected function targetPropertyGroups(): void
    {
        $this->target(AttributeGroup::class)
            /**
             * These replacements handle:
             * - Split between every group_FOP and group_Not
             * - Some rename
             * - Inheritance properties management: XSD does not allow to specify an attribute with both a
             * group and an `<attribute>` tag. However, XSL specification defines every attribute on a tag,
             * whether its value is inherited or not.
             *
             * Sometimes, Apache FOP groups are fundamentally different from XSL ones.
             */
            ->replaceMap([
                /**
                 * A different group
                 */
                [\Lsa\Xsl\Core\Validation\PropertyGroups\InheritedProperties::class, \Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\InheritableProperties::class],
                /**
                 * Mostly rename/FOP/Not
                 */
                [\Lsa\Xsl\Core\Validation\PropertyGroups\AccessibilityProperties::class, \Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\AccessibilityProperties::class],
                [\Lsa\Xsl\Core\Validation\PropertyGroups\BorderPaddingBackgroundProperties::class, \Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\BorderPaddingAndBackgroundProperties::class],
                [\Lsa\Xsl\Core\Validation\PropertyGroups\AuralProperties::class, \Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\AuralProperties::class],
                [\Lsa\Xsl\Core\Validation\PropertyGroups\RelativePositionProperties::class, \Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\RelativePositionProperties::class],
                [\Lsa\Xsl\Core\Validation\PropertyGroups\AbsolutePositionProperties::class, \Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\AbsolutePositionProperties::class],
                [\Lsa\Xsl\Core\Validation\PropertyGroups\FontProperties::class, \Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\FontProperties::class],
                [\Lsa\Xsl\Core\Validation\PropertyGroups\MarginBlockProperties::class, \Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\MarginPropertiesBlock::class],
                [\Lsa\Xsl\Core\Validation\PropertyGroups\MarginInlineProperties::class, \Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\MarginPropertiesInline::class],

            ]);
    }

    /**
     * Utility method to handle every attribute replacement
     */
    protected function targetAttributes(): void
    {
        /**
         * These types are coalesced to string
         */
        $this->considerStringKeepType([
            \Lsa\Xsl\Core\Validation\Types\BackgroundImageType::class,
            \Lsa\Xsl\Core\Xsd\Fop\Types\BackgroundImageType::class,
            \Lsa\Xsl\Core\Validation\Types\SpeakType::class,
            \Lsa\Xsl\Core\Validation\Types\SpeakHeaderType::class,
            \Lsa\Xsl\Core\Validation\Types\CaseNameType::class,
            \Lsa\Xsl\Core\Validation\Types\FontStretchType::class,
        ]);
        $this->target(Attribute::class)
            ->replaceMap([
                /**
                 * These types are coalesced to another equivalent type
                 */
                [
                    [
                        \Lsa\Xsl\Core\Validation\Types\BlockProgressionDimensionType::class,
                        \Lsa\Xsl\Core\Validation\Types\InlineProgressionDimensionType::class,
                        \Lsa\Xsl\Core\Validation\Types\Css\MarginWidthType::class,
                    ],
                    \Lsa\Xsl\Core\Xsd\Fop\Types\MarginWidthType::class,
                ],
                [\Lsa\Xsl\Core\Validation\Types\BorderAbsoluteWidthType::class,    \Lsa\Xsl\Core\Xsd\Fop\Types\BorderTopWidthType::class],
                [\Lsa\Xsl\Core\Validation\Types\BorderRelativeWidthType::class,    \Lsa\Xsl\Core\Xsd\Fop\Types\BorderBeforeWidthType::class],
                [\Lsa\Xsl\Core\Validation\Types\BorderMultiStyleType::class,    \Lsa\Xsl\Core\Xsd\Fop\Types\BorderMultiStyleType::class],
                [
                    [
                        \Lsa\Xsl\Core\Validation\Types\BorderMultiWidthType::class,
                        \Lsa\Xsl\Core\Validation\Types\MarginType::class,
                    ],
                    \Lsa\Xsl\Core\Xsd\Fop\Types\BorderMarginWidthType::class,
                ],
                [\Lsa\Xsl\Core\Validation\Types\BorderSpacingType::class,    \Lsa\Xsl\Core\Xsd\Fop\Types\LengthType::class],
                [
                    [
                        \Lsa\Xsl\Core\Validation\Types\GlyphOrientationHorizontalType::class,
                        \Lsa\Xsl\Core\Validation\Types\GlyphOrientationVerticalType::class,
                        \Lsa\Xsl\Core\Validation\Types\ReferenceOrientationType::class,
                    ],
                    \Lsa\Xsl\Core\Xsd\Fop\Types\OrientationType::class,
                ],
                [\Lsa\Xsl\Core\Validation\Types\FontFamilyType::class, \Lsa\Xsl\Core\Xsd\Fop\Types\FamilyNameType::class],
                [\Lsa\Xsl\Core\Validation\Types\HyphenationCharacterCountType::class, \Lsa\Xsl\Core\Validation\Types\Xsl\IntegerType::class],
                [\Lsa\Xsl\Core\Validation\Types\InlineProgressionDimensionMaximumType::class, \Lsa\Xsl\Core\Validation\Types\BlockProgressionDimensionMaximumType::class],
                [\Lsa\Xsl\Core\Validation\Types\InlineProgressionDimensionOptimumType::class, \Lsa\Xsl\Core\Validation\Types\BlockProgressionDimensionOptimumType::class],
                [
                    [
                        \Lsa\Xsl\Core\Validation\Types\MinHeightType::class,
                        \Lsa\Xsl\Core\Validation\Types\MinWidthType::class,
                    ],
                    \Lsa\Xsl\Core\Validation\Types\StartIndentType::class,
                ],
                [\Lsa\Xsl\Core\Validation\Types\PaddingAbsoluteType::class,           \Lsa\Xsl\Core\Xsd\Fop\Types\PaddingTopType::class],
                [\Lsa\Xsl\Core\Validation\Types\PaddingRelativeType::class,        \Lsa\Xsl\Core\Xsd\Fop\Types\PaddingBeforeType::class],
                [\Lsa\Xsl\Core\Validation\Types\PageBreakBeforeType::class, \Lsa\Xsl\Core\Validation\Types\PageBreakAfterType::class],
                [\Lsa\Xsl\Core\Validation\Types\TextIndentType::class, \Lsa\Xsl\Core\Xsd\Fop\Types\LengthPercentageType::class],
                [\Lsa\Xsl\Core\Validation\Types\SizeType::class, \Lsa\Xsl\Core\Xsd\Fop\Types\LengthType::class],
                [
                    [
                        \Lsa\Xsl\Core\Validation\Types\Xsl\SpaceType::class,
                        \Lsa\Xsl\Core\Validation\Types\SpaceAfterType::class,
                        \Lsa\Xsl\Core\Validation\Types\SpaceBeforeType::class,
                    ],
                    \Lsa\Xsl\Core\Xsd\Fop\Types\SpaceType::class,
                ],
                [\Lsa\Xsl\Core\Validation\Types\SpaceEndType::class, \Lsa\Xsl\Core\Validation\Types\SpaceStartType::class],
                [\Lsa\Xsl\Core\Validation\Types\Xsl\SpacePrecedenceType::class, \Lsa\Xsl\Core\Xsd\Fop\Types\IntegerForceType::class],
                [\Lsa\Xsl\Core\Validation\Types\WidthType::class, \Lsa\Xsl\Core\Validation\Types\HeightType::class],
            ]);
    }

    /**
     * Finders for this profile, may be overriden by subclasses
     *
     * @return \Lsa\Xsd\Generator\Configuration\InheritableConfiguration Finders configuration
     *
     * @phpstan-ignore missingType.generics
     */
    public function getFinders(): InheritableConfiguration
    {
        return new InheritableConfiguration(__FUNCTION__, [
            // FOP specifics: tag groups, attribute groups, and custom types
            TagGroupFinder::class,
            TypeFinder::class,
            AttributeGroupFinder::class,
            // Defaults
            // Type finder (<simpleType/>)
            FindersTypeFinder::class,
            // Tag finder (<element/>)
            TagFinder::class,
            // Added types
            AddedTypesFinder::class,
        ]);
    }

    /**
     * Transformers for this profile, may be overriden by subclasses
     *
     * @return InheritableConfiguration Transformers' class names
     *
     * @phpstan-ignore missingType.generics
     */
    public function getTransformers(): InheritableConfiguration
    {
        return (new InheritableConfiguration(__FUNCTION__))
            ->inherit()
            ->rule(Union::class, [
                'evaluate' => [
                    /**
                     * Format transformers:
                     * Every transformer will apply to a defined set of Types. For these types,
                     * it will replace an constant with a type counterpart.
                     * For example, an INHERIT constant with the "fo:inherit_Type" simpleType.
                     */
                    \Lsa\Xsl\Core\Xsd\Fop\Transformers\Format\AutoInheritTransformer::class,
                    \Lsa\Xsl\Core\Xsd\Fop\Transformers\Format\AutoTransformer::class,
                    \Lsa\Xsl\Core\Xsd\Fop\Transformers\Format\InheritNoLimitTransformer::class,
                    \Lsa\Xsl\Core\Xsd\Fop\Transformers\Format\InheritNoneTransformer::class,
                    \Lsa\Xsl\Core\Xsd\Fop\Transformers\Format\InheritNormalTransformer::class,
                    \Lsa\Xsl\Core\Xsd\Fop\Transformers\Format\InheritTransformer::class,
                    \Lsa\Xsl\Core\Xsd\Fop\Transformers\Format\InheritUseFontMetricsTransformer::class,

                    InheritableConfiguration::PARENT,
                ],
            ])
            ->rule(TypeTransformer::class, [
                'restriction.mapping' => [
                    // Compound validations are handled with and xs prefix
                    CompoundValidator::class => XsCompoundRestriction::class,
                    // phpcs:disable Squiz.Arrays.ArrayDeclaration.NoKeySpecified
                    InheritableConfiguration::PARENT,
                ],
            ])
            ->rule(XsCompoundRestriction::class, [
                'evaluate' => [
                    XsCompoundRestrictionTransformer::class,
                ],
            ]);
    }

    /**
     * Creates a name for a tag (ex <element name="block">)
     *
     * @param  class-string|string|object  $referencedObject  The object to reference (ex: Block::class, or an instance of this class)
     * @param  class-string  $callerClass  Class asking the name
     *
     * @throws \RuntimeException
     */
    public function getName(string|object $referencedObject, string $callerClass): string
    {
        // An attribute with a String type should be rendered as "xs:string"
        if ($callerClass === AttributeTransformer::class && $referencedObject === StringType::class) {
            return 'xs:string';
        }

        // A CustomType has a name
        if ($referencedObject instanceof CustomType) {
            return $this->getName($referencedObject->name, $callerClass);
        }

        // A tag has a name
        if ($referencedObject instanceof FopTag) {
            // Do not bother, use the tag name
            return $referencedObject->getTagName();
        }

        // Format referencedObject from its class
        if (is_string($referencedObject) === true) {
            if (class_exists($referencedObject) === false) {
                return $referencedObject;
            }
            $referencedObject = new $referencedObject();
        }

        $referencedClass = $this->getReferencedClass($referencedObject);
        if ($referencedClass === null) {
            throw new RuntimeException('Cannot get referenced class');
        }
        // An element with a name declaration (ex: `HasName` trait) should return it.
        if ($this->hasNameDeclaration($referencedObject) === true) {
            return $referencedClass;
        }

        // Default behavior:
        // Get the class, and create a name based on namespace declaration
        $name = parent::getName($referencedClass, $callerClass);

        // Types are suffixed with '_Type' and not '_type'
        if (str_ends_with($name, '_type') === true) {
            $name = substr($name, 0, -5).'_Type';
        }

        return $name;
    }
}
