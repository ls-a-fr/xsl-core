<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Tags;

use Lsa\Xml\Utils\Validation\Definition;
use Lsa\Xml\Utils\Validation\Element;
use Lsa\Xml\Utils\Validation\Sequence;
use Lsa\Xsl\Core\Tags\Table\TableBody;
use Lsa\Xsl\Core\Tags\Table\TableColumn;
use Lsa\Xsl\Core\Tags\Table\TableFooter;
use Lsa\Xsl\Core\Tags\Table\TableHeader;
use Lsa\Xsl\Core\Validation\Properties\BlockProgressionDimension;
use Lsa\Xsl\Core\Validation\Properties\BorderAfterPrecedence;
use Lsa\Xsl\Core\Validation\Properties\BorderBeforePrecedence;
use Lsa\Xsl\Core\Validation\Properties\BorderCollapse;
use Lsa\Xsl\Core\Validation\Properties\BorderEndPrecedence;
use Lsa\Xsl\Core\Validation\Properties\BorderSeparation;
use Lsa\Xsl\Core\Validation\Properties\BorderStartPrecedence;
use Lsa\Xsl\Core\Validation\Properties\BreakAfter;
use Lsa\Xsl\Core\Validation\Properties\BreakBefore;
use Lsa\Xsl\Core\Validation\Properties\Clear;
use Lsa\Xsl\Core\Validation\Properties\Height;
use Lsa\Xsl\Core\Validation\Properties\Id;
use Lsa\Xsl\Core\Validation\Properties\IndexClass;
use Lsa\Xsl\Core\Validation\Properties\IndexKey;
use Lsa\Xsl\Core\Validation\Properties\InlineProgressionDimension;
use Lsa\Xsl\Core\Validation\Properties\IntrusionDisplace;
use Lsa\Xsl\Core\Validation\Properties\KeepTogether;
use Lsa\Xsl\Core\Validation\Properties\KeepWithNext;
use Lsa\Xsl\Core\Validation\Properties\KeepWithPrevious;
use Lsa\Xsl\Core\Validation\Properties\TableLayout;
use Lsa\Xsl\Core\Validation\Properties\TableOmitFooterAtBreak;
use Lsa\Xsl\Core\Validation\Properties\TableOmitHeaderAtBreak;
use Lsa\Xsl\Core\Validation\Properties\Width;
use Lsa\Xsl\Core\Validation\Properties\WritingMode;
use Lsa\Xsl\Core\Validation\PropertyGroups\AccessibilityProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\AuralProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\BorderPaddingBackgroundProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\InheritedProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\MarginBlockProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\RelativePositionProperties;

trait Table
{
    /**
     * Returns this tag definition
     *
     * @return Definition This tag definition
     */
    public function asDefinition(): Definition
    {
        return (new Definition())
            ->sequence(new Sequence(
                new Element(TableColumn::class, minOccurs: 0, maxOccurs: 'unbounded'),
                new Element(TableHeader::class, minOccurs: 0),
                new Element(TableFooter::class, minOccurs: 0),
                new Element(TableBody::class, maxOccurs: 'unbounded')
            ))
            ->allows([
                AccessibilityProperties::class,
                AuralProperties::class,
                BorderPaddingBackgroundProperties::class,
                MarginBlockProperties::class,
                RelativePositionProperties::class,
                BlockProgressionDimension::class,
                BorderAfterPrecedence::class,
                BorderBeforePrecedence::class,
                BorderCollapse::class,
                BorderEndPrecedence::class,
                BorderSeparation::class,
                BorderStartPrecedence::class,
                BreakAfter::class,
                BreakBefore::class,
                Clear::class,
                Id::class,
                IndexClass::class,
                IndexKey::class,
                InlineProgressionDimension::class,
                IntrusionDisplace::class,
                Height::class,
                KeepTogether::class,
                KeepWithNext::class,
                KeepWithPrevious::class,
                TableLayout::class,
                TableOmitFooterAtBreak::class,
                TableOmitHeaderAtBreak::class,
                Width::class,
                WritingMode::class,
            ])
            ->inheritables([
                InheritedProperties::class,
            ]);
    }
}
