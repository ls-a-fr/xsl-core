<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Tags;

use Lsa\Xml\Utils\Validation\Choice;
use Lsa\Xml\Utils\Validation\Definition;
use Lsa\Xml\Utils\Validation\Element;
use Lsa\Xsl\Core\Tags\Other\Marker;
use Lsa\Xsl\Core\Tags\OutOfLine\FloatElement;
use Lsa\Xsl\Core\Tags\OutOfLine\Footnote;
use Lsa\Xsl\Core\Validation\Properties\BlockProgressionDimension;
use Lsa\Xsl\Core\Validation\Properties\BreakAfter;
use Lsa\Xsl\Core\Validation\Properties\BreakBefore;
use Lsa\Xsl\Core\Validation\Properties\Clear;
use Lsa\Xsl\Core\Validation\Properties\Clip;
use Lsa\Xsl\Core\Validation\Properties\DisplayAlign;
use Lsa\Xsl\Core\Validation\Properties\Height;
use Lsa\Xsl\Core\Validation\Properties\Id;
use Lsa\Xsl\Core\Validation\Properties\IndexClass;
use Lsa\Xsl\Core\Validation\Properties\IndexKey;
use Lsa\Xsl\Core\Validation\Properties\InlineProgressionDimension;
use Lsa\Xsl\Core\Validation\Properties\IntrusionDisplace;
use Lsa\Xsl\Core\Validation\Properties\KeepTogether;
use Lsa\Xsl\Core\Validation\Properties\KeepWithNext;
use Lsa\Xsl\Core\Validation\Properties\KeepWithPrevious;
use Lsa\Xsl\Core\Validation\Properties\Overflow;
use Lsa\Xsl\Core\Validation\Properties\ReferenceOrientation;
use Lsa\Xsl\Core\Validation\Properties\Span;
use Lsa\Xsl\Core\Validation\Properties\Width;
use Lsa\Xsl\Core\Validation\Properties\WritingMode;
use Lsa\Xsl\Core\Validation\Properties\ZIndex;
use Lsa\Xsl\Core\Validation\PropertyGroups\AbsolutePositionProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\BorderPaddingBackgroundProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\InheritedProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\MarginBlockProperties;
use Lsa\Xsl\Core\Validation\TagGroups\BlockGroup;
use Lsa\Xsl\Core\Validation\TagGroups\NeutralGroup;

trait BlockContainer
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
                new BlockGroup(),
                new NeutralGroup(),
                new Element(FloatElement::class, minOccurs: 0, maxOccurs: 'unbounded'),
                new Element(Footnote::class, minOccurs: 0, maxOccurs: 'unbounded'),
                new Element(Marker::class, minOccurs: 0, maxOccurs: 'unbounded')
            ))->maxOccurs('unbounded'))
            ->allows([
                AbsolutePositionProperties::class,
                BorderPaddingBackgroundProperties::class,
                MarginBlockProperties::class,
                BlockProgressionDimension::class,
                BreakAfter::class,
                BreakBefore::class,
                Clear::class,
                Clip::class,
                DisplayAlign::class,
                Height::class,
                Id::class,
                IndexClass::class,
                IndexKey::class,
                InlineProgressionDimension::class,
                IntrusionDisplace::class,
                KeepTogether::class,
                KeepWithNext::class,
                KeepWithPrevious::class,
                Overflow::class,
                ReferenceOrientation::class,
                Span::class,
                Width::class,
                WritingMode::class,
                ZIndex::class,
            ])
            ->inheritables([
                InheritedProperties::class,
            ]);
    }
}
