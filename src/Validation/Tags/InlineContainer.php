<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Tags;

use Lsa\Xml\Utils\Validation\Choice;
use Lsa\Xml\Utils\Validation\Definition;
use Lsa\Xml\Utils\Validation\Element;
use Lsa\Xsl\Core\Tags\Block\Block;
use Lsa\Xsl\Core\Tags\Block\BlockContainer;
use Lsa\Xsl\Core\Tags\Indexing\IndexPageCitationList;
use Lsa\Xsl\Core\Tags\Inline\BidiOverride;
use Lsa\Xsl\Core\Tags\Inline\Character;
use Lsa\Xsl\Core\Tags\Inline\ExternalGraphic;
use Lsa\Xsl\Core\Tags\Inline\Inline;
use Lsa\Xsl\Core\Tags\Inline\InstreamForeignObject;
use Lsa\Xsl\Core\Tags\Inline\Leader;
use Lsa\Xsl\Core\Tags\Inline\PageNumber;
use Lsa\Xsl\Core\Tags\Inline\PageNumberCitation;
use Lsa\Xsl\Core\Tags\Inline\PageNumberCitationLast;
use Lsa\Xsl\Core\Tags\Inline\ScalingValueCitation;
use Lsa\Xsl\Core\Tags\Link\BasicLink;
use Lsa\Xsl\Core\Tags\List\ListBlock;
use Lsa\Xsl\Core\Tags\Multi\MultiToggle;
use Lsa\Xsl\Core\Tags\Table\Table;
use Lsa\Xsl\Core\Tags\Table\TableAndCaption;
use Lsa\Xsl\Core\Validation\Properties\BlockProgressionDimension;
use Lsa\Xsl\Core\Validation\Properties\Clip;
use Lsa\Xsl\Core\Validation\Properties\DisplayAlign;
use Lsa\Xsl\Core\Validation\Properties\Height;
use Lsa\Xsl\Core\Validation\Properties\Id;
use Lsa\Xsl\Core\Validation\Properties\IndexClass;
use Lsa\Xsl\Core\Validation\Properties\IndexKey;
use Lsa\Xsl\Core\Validation\Properties\InlineProgressionDimension;
use Lsa\Xsl\Core\Validation\Properties\KeepTogether;
use Lsa\Xsl\Core\Validation\Properties\KeepWithNext;
use Lsa\Xsl\Core\Validation\Properties\KeepWithPrevious;
use Lsa\Xsl\Core\Validation\Properties\LineHeight;
use Lsa\Xsl\Core\Validation\Properties\Overflow;
use Lsa\Xsl\Core\Validation\Properties\ReferenceOrientation;
use Lsa\Xsl\Core\Validation\Properties\VerticalAlign;
use Lsa\Xsl\Core\Validation\Properties\Width;
use Lsa\Xsl\Core\Validation\Properties\WritingMode;
use Lsa\Xsl\Core\Validation\PropertyGroups\BorderPaddingBackgroundProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\InheritedProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\MarginInlineProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\RelativePositionProperties;
use Lsa\Xsl\Core\Validation\TagGroups\InlineGroup;
use Lsa\Xsl\Core\Validation\TagGroups\NeutralGroup;

trait InlineContainer
{
    /**
     * Returns this tag definition
     *
     * @return Definition This tag definition
     */
    public function asDefinition(): Definition
    {
        return (new Definition())
            ->choice((new Choice(
                // InlineGroup without Leader and InlineContainer
                new Element(BidiOverride::class),
                new Element(Character::class),
                new Element(ExternalGraphic::class),
                new Element(InstreamForeignObject::class),
                new Element(Inline::class),
                new Element(PageNumber::class),
                new Element(PageNumberCitation::class),
                new Element(PageNumberCitationLast::class),
                new Element(ScalingValueCitation::class),
                new Element(BasicLink::class),
                new Element(MultiToggle::class),
                new Element(IndexPageCitationList::class),
                // Block group except Block container
                new Element(Block::class),
                new Element(BlockContainer::class),
                new Element(TableAndCaption::class),
                new Element(Table::class),
                new Element(ListBlock::class),
                new NeutralGroup()
            ))->maxOccurs('unbounded'))
            ->allows([
                BorderPaddingBackgroundProperties::class,
                MarginInlineProperties::class,
                RelativePositionProperties::class,
                BlockProgressionDimension::class,
                Clip::class,
                DisplayAlign::class,
                Height::class,
                Id::class,
                IndexClass::class,
                IndexKey::class,
                InlineProgressionDimension::class,
                KeepTogether::class,
                KeepWithNext::class,
                KeepWithPrevious::class,
                LineHeight::class,
                Overflow::class,
                ReferenceOrientation::class,
                VerticalAlign::class,
                Width::class,
                WritingMode::class,
            ])
            ->inheritables([
                InheritedProperties::class,
            ]);
    }
}
