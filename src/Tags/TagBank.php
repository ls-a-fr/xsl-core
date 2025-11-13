<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tags;

use Lsa\Xml\Utils\Collections\NodeCollection;
use Lsa\Xsl\Core\Exceptions\TagNotFoundException;
use Lsa\Xsl\Core\Tags\Block\Block;
use Lsa\Xsl\Core\Tags\Block\BlockContainer;
use Lsa\Xsl\Core\Tags\Bookmark\Bookmark;
use Lsa\Xsl\Core\Tags\Bookmark\BookmarkTitle;
use Lsa\Xsl\Core\Tags\Bookmark\BookmarkTree;
use Lsa\Xsl\Core\Tags\Indexing\IndexKeyReference;
use Lsa\Xsl\Core\Tags\Indexing\IndexPageCitationList;
use Lsa\Xsl\Core\Tags\Indexing\IndexPageCitationListSeparator;
use Lsa\Xsl\Core\Tags\Indexing\IndexPageCitationRangeSeparator;
use Lsa\Xsl\Core\Tags\Indexing\IndexPageNumberPrefix;
use Lsa\Xsl\Core\Tags\Indexing\IndexPageNumberSuffix;
use Lsa\Xsl\Core\Tags\Indexing\IndexRangeBegin;
use Lsa\Xsl\Core\Tags\Indexing\IndexRangeEnd;
use Lsa\Xsl\Core\Tags\Inline\BidiOverride;
use Lsa\Xsl\Core\Tags\Inline\Character;
use Lsa\Xsl\Core\Tags\Inline\ExternalGraphic;
use Lsa\Xsl\Core\Tags\Inline\FolioPrefix;
use Lsa\Xsl\Core\Tags\Inline\FolioSuffix;
use Lsa\Xsl\Core\Tags\Inline\InitialPropertySet;
use Lsa\Xsl\Core\Tags\Inline\Inline;
use Lsa\Xsl\Core\Tags\Inline\InlineContainer;
use Lsa\Xsl\Core\Tags\Inline\InstreamForeignObject;
use Lsa\Xsl\Core\Tags\Inline\Leader;
use Lsa\Xsl\Core\Tags\Inline\PageNumber;
use Lsa\Xsl\Core\Tags\Inline\PageNumberCitation;
use Lsa\Xsl\Core\Tags\Inline\PageNumberCitationLast;
use Lsa\Xsl\Core\Tags\Inline\ScalingValueCitation;
use Lsa\Xsl\Core\Tags\Layout\ColorProfile;
use Lsa\Xsl\Core\Tags\Layout\ConditionalPageMasterReference;
use Lsa\Xsl\Core\Tags\Layout\Declarations;
use Lsa\Xsl\Core\Tags\Layout\Flow;
use Lsa\Xsl\Core\Tags\Layout\FlowAssignment;
use Lsa\Xsl\Core\Tags\Layout\FlowMap;
use Lsa\Xsl\Core\Tags\Layout\FlowNameSpecifier;
use Lsa\Xsl\Core\Tags\Layout\FlowSourceList;
use Lsa\Xsl\Core\Tags\Layout\FlowTargetList;
use Lsa\Xsl\Core\Tags\Layout\LayoutMasterSet;
use Lsa\Xsl\Core\Tags\Layout\PageSequence;
use Lsa\Xsl\Core\Tags\Layout\PageSequenceMaster;
use Lsa\Xsl\Core\Tags\Layout\PageSequenceWrapper;
use Lsa\Xsl\Core\Tags\Layout\RegionAfter;
use Lsa\Xsl\Core\Tags\Layout\RegionBefore;
use Lsa\Xsl\Core\Tags\Layout\RegionBody;
use Lsa\Xsl\Core\Tags\Layout\RegionEnd;
use Lsa\Xsl\Core\Tags\Layout\RegionNameSpecifier;
use Lsa\Xsl\Core\Tags\Layout\RegionStart;
use Lsa\Xsl\Core\Tags\Layout\RepeatablePageMasterAlternatives;
use Lsa\Xsl\Core\Tags\Layout\RepeatablePageMasterReference;
use Lsa\Xsl\Core\Tags\Layout\Root;
use Lsa\Xsl\Core\Tags\Layout\SimplePageMaster;
use Lsa\Xsl\Core\Tags\Layout\SinglePageMasterReference;
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
use Lsa\Xsl\Core\Tags\Other\ChangeBarBegin;
use Lsa\Xsl\Core\Tags\Other\ChangeBarEnd;
use Lsa\Xsl\Core\Tags\Other\Marker;
use Lsa\Xsl\Core\Tags\Other\RetrieveMarker;
use Lsa\Xsl\Core\Tags\Other\RetrieveTableMarker;
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
use Lsa\Xsl\Core\Xml\Tag;

/**
 * Holds every tag used in XSL-FO specification.
 */
class TagBank
{
    /**
     * The tag bank
     *
     * @var array<string, \Lsa\Xsl\Core\Xml\Tag>
     */
    private static array $bank;

    /**
     * Returns one tag based on a tag name.
     * Throws an exception when not found.
     *
     * @param  string  $tagName  The tag name
     * @return \Lsa\Xsl\Core\Xml\Tag The found tag
     *
     * @throws TagNotFoundException
     */
    public static function getOne(string $tagName): Tag
    {
        self::getBank();
        if (isset(self::$bank[$tagName]) === false) {
            throw new TagNotFoundException('Tag not found:'.$tagName);
        }

        return self::$bank[$tagName];
    }

    /**
     * Returns several tags based on their tag names.
     * Only found tags are returned.
     *
     * @param  list<string>  $tagNames  Tag names
     * @return \Lsa\Xml\Utils\Collections\NodeCollection The found tags
     */
    public static function get(array $tagNames): NodeCollection
    {
        self::getBank();

        return (new NodeCollection())
            ->addAll(array_filter(self::$bank, fn ($k) => in_array($k, $tagNames), ARRAY_FILTER_USE_KEY));
    }

    /**
     * Get the tag bank.
     *
     * @return array<string, \Lsa\Xsl\Core\Xml\Tag> The tag bank
     */
    public static function getBank(): array
    {
        if (isset(self::$bank) === false) {
            self::$bank = [];

            foreach (self::getDefinitions() as $tagName => $tagType) {
                /**
                 * Will be an instance of \Lsa\Xsl\Core\Xml\Tag
                 *
                 * @var \Lsa\Xsl\Core\Xml\Tag $tag
                 */
                $tag = new $tagType();
                self::$bank[$tagName] = $tag;
            }
        }

        return self::$bank;
    }

    /**
     * Get tag definitions.
     * Key is the tag name, value is the type class string.
     *
     * @return array<string, class-string> The bank definitions
     */
    public static function getDefinitions(): array
    {
        // phpcs:disable Generic.Files.LineLength
        return [
            'root' => Root::class,
            'declarations' => Declarations::class,
            'color-profile' => ColorProfile::class,
            'page-sequence' => PageSequence::class,
            'page-sequence-wrapper' => PageSequenceWrapper::class,
            'layout-master-set' => LayoutMasterSet::class,
            'page-sequence-master' => PageSequenceMaster::class,
            'single-page-master-reference' => SinglePageMasterReference::class,
            'repeatable-page-master-reference' => RepeatablePageMasterReference::class,
            'repeatable-page-master-alternatives' => RepeatablePageMasterAlternatives::class,
            'conditional-page-master-reference' => ConditionalPageMasterReference::class,
            'simple-page-master' => SimplePageMaster::class,
            'region-body' => RegionBody::class,
            'region-before' => RegionBefore::class,
            'region-after' => RegionAfter::class,
            'region-start' => RegionStart::class,
            'region-end' => RegionEnd::class,
            'flow' => Flow::class,
            'static-content' => StaticContent::class,
            'title' => Title::class,
            'flow-map' => FlowMap::class,
            'flow-assignment' => FlowAssignment::class,
            'flow-source-list' => FlowSourceList::class,
            'flow-name-specifier' => FlowNameSpecifier::class,
            'flow-target-list' => FlowTargetList::class,
            'region-name-specifier' => RegionNameSpecifier::class,
            'block' => Block::class,
            'block-container' => BlockContainer::class,
            'bidi-override' => BidiOverride::class,
            'character' => Character::class,
            'initial-property-set' => InitialPropertySet::class,
            'external-graphic' => ExternalGraphic::class,
            'instream-foreign-object' => InstreamForeignObject::class,
            'inline' => Inline::class,
            'inline-container' => InlineContainer::class,
            'leader' => Leader::class,
            'page-number' => PageNumber::class,
            'page-number-citation' => PageNumberCitation::class,
            'page-number-citation-last' => PageNumberCitationLast::class,
            'folio-prefix' => FolioPrefix::class,
            'folio-suffix' => FolioSuffix::class,
            'scaling-value-citation' => ScalingValueCitation::class,
            'table-and-caption' => TableAndCaption::class,
            'table' => Table::class,
            'table-column' => TableColumn::class,
            'table-caption' => TableCaption::class,
            'table-header' => TableHeader::class,
            'table-footer' => TableFooter::class,
            'table-body' => TableBody::class,
            'table-row' => TableRow::class,
            'table-cell' => TableCell::class,
            'list-block' => ListBlock::class,
            'list-item' => ListItem::class,
            'list-item-body' => ListItemBody::class,
            'list-item-label' => ListItemLabel::class,
            'basic-link' => BasicLink::class,
            'multi-switch' => MultiSwitch::class,
            'multi-case' => MultiCase::class,
            'multi-toggle' => MultiToggle::class,
            'multi-properties' => MultiProperties::class,
            'multi-property-set' => MultiPropertySet::class,
            'index-page-number-prefix' => IndexPageNumberPrefix::class,
            'index-page-number-suffix' => IndexPageNumberSuffix::class,
            'index-range-begin' => IndexRangeBegin::class,
            'index-range-end' => IndexRangeEnd::class,
            'index-key-reference' => IndexKeyReference::class,
            'index-page-citation-list' => IndexPageCitationList::class,
            'index-page-citation-list-separator' => IndexPageCitationListSeparator::class,
            'index-page-citation-range-separator' => IndexPageCitationRangeSeparator::class,
            'bookmark-tree' => BookmarkTree::class,
            'bookmark' => Bookmark::class,
            'bookmark-title' => BookmarkTitle::class,
            'float' => FloatElement::class,
            'footnote' => Footnote::class,
            'footnote-body' => FootnoteBody::class,
            'change-bar-begin' => ChangeBarBegin::class,
            'change-bar-end' => ChangeBarEnd::class,
            'wrapper' => Wrapper::class,
            'marker' => Marker::class,
            'retrieve-marker' => RetrieveMarker::class,
            'retrieve-table-marker' => RetrieveTableMarker::class,
        ];
    }
}
