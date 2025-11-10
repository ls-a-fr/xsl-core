<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Tags;

use Lsa\Xml\Utils\Validation\Choice;
use Lsa\Xml\Utils\Validation\Definition;
use Lsa\Xml\Utils\Validation\Element;
use Lsa\Xsl\Core\Tags\Other\Marker;
use Lsa\Xsl\Core\Tags\OutOfLine\FloatElement;
use Lsa\Xsl\Core\Tags\OutOfLine\Footnote;
use Lsa\Xsl\Core\Validation\Properties\DestinationPlacementOffset;
use Lsa\Xsl\Core\Validation\Properties\ExternalDestination;
use Lsa\Xsl\Core\Validation\Properties\Id;
use Lsa\Xsl\Core\Validation\Properties\IndexClass;
use Lsa\Xsl\Core\Validation\Properties\IndexKey;
use Lsa\Xsl\Core\Validation\Properties\IndicateDestination;
use Lsa\Xsl\Core\Validation\Properties\InternalDestination;
use Lsa\Xsl\Core\Validation\Properties\KeepTogether;
use Lsa\Xsl\Core\Validation\Properties\KeepWithNext;
use Lsa\Xsl\Core\Validation\Properties\KeepWithPrevious;
use Lsa\Xsl\Core\Validation\Properties\LineHeight;
use Lsa\Xsl\Core\Validation\Properties\ShowDestination;
use Lsa\Xsl\Core\Validation\Properties\TargetPresentationContext;
use Lsa\Xsl\Core\Validation\Properties\TargetProcessingContext;
use Lsa\Xsl\Core\Validation\Properties\TargetStylesheet;
use Lsa\Xsl\Core\Validation\Properties\VerticalAlign;
use Lsa\Xsl\Core\Validation\PropertyGroups\AccessibilityProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\AuralProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\BorderPaddingBackgroundProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\InheritedProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\MarginInlineProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\RelativePositionProperties;
use Lsa\Xsl\Core\Validation\TagGroups\BlockGroup;
use Lsa\Xsl\Core\Validation\TagGroups\InlineGroup;
use Lsa\Xsl\Core\Validation\TagGroups\NeutralGroup;

trait BasicLink
{
    /**
     * Returns this tag definition
     *
     * @return Definition This tag definition
     */
    public function asDefinition(): Definition
    {
        return (new Definition())
            ->mixed()
            ->choice((new Choice(
                new InlineGroup(),
                new BlockGroup(),
                new NeutralGroup(),
                new Element(Marker::class, minOccurs: 0, maxOccurs: 'unbounded'),
                new Element(FloatElement::class),
                new Element(Footnote::class)
            ))->minOccurs(0)->maxOccurs('unbounded'))
            ->allows([
                AccessibilityProperties::class,
                AuralProperties::class,
                BorderPaddingBackgroundProperties::class,
                MarginInlineProperties::class,
                RelativePositionProperties::class,

                DestinationPlacementOffset::class,
                ExternalDestination::class,
                Id::class,
                IndexClass::class,
                IndexKey::class,
                IndicateDestination::class,
                InternalDestination::class,
                KeepTogether::class,
                KeepWithNext::class,
                KeepWithPrevious::class,
                LineHeight::class,
                ShowDestination::class,
                TargetProcessingContext::class,
                TargetPresentationContext::class,
                TargetStylesheet::class,
                VerticalAlign::class,
            ])
            ->inheritables([
                InheritedProperties::class,
            ]);
    }
}
