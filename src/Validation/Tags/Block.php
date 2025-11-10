<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Tags;

use Lsa\Xml\Utils\Validation\Choice;
use Lsa\Xml\Utils\Validation\Definition;
use Lsa\Xml\Utils\Validation\Element;
use Lsa\Xsl\Core\Tags\Inline\InitialPropertySet;
use Lsa\Xsl\Core\Tags\Other\Marker;
use Lsa\Xsl\Core\Tags\OutOfLine\FloatElement;
use Lsa\Xsl\Core\Tags\OutOfLine\Footnote;
use Lsa\Xsl\Core\Validation\Properties\BreakAfter;
use Lsa\Xsl\Core\Validation\Properties\BreakBefore;
use Lsa\Xsl\Core\Validation\Properties\Clear;
use Lsa\Xsl\Core\Validation\Properties\Color;
use Lsa\Xsl\Core\Validation\Properties\HyphenationKeep;
use Lsa\Xsl\Core\Validation\Properties\HyphenationLadderCount;
use Lsa\Xsl\Core\Validation\Properties\Id;
use Lsa\Xsl\Core\Validation\Properties\IndexClass;
use Lsa\Xsl\Core\Validation\Properties\IndexKey;
use Lsa\Xsl\Core\Validation\Properties\IntrusionDisplace;
use Lsa\Xsl\Core\Validation\Properties\KeepTogether;
use Lsa\Xsl\Core\Validation\Properties\KeepWithNext;
use Lsa\Xsl\Core\Validation\Properties\KeepWithPrevious;
use Lsa\Xsl\Core\Validation\Properties\LastLineEndIndent;
use Lsa\Xsl\Core\Validation\Properties\LinefeedTreatment;
use Lsa\Xsl\Core\Validation\Properties\LineHeight;
use Lsa\Xsl\Core\Validation\Properties\LineHeightShiftAdjustment;
use Lsa\Xsl\Core\Validation\Properties\LineStackingStrategy;
use Lsa\Xsl\Core\Validation\Properties\Orphans;
use Lsa\Xsl\Core\Validation\Properties\Span;
use Lsa\Xsl\Core\Validation\Properties\TextAlign;
use Lsa\Xsl\Core\Validation\Properties\TextAlignLast;
use Lsa\Xsl\Core\Validation\Properties\TextAltitude;
use Lsa\Xsl\Core\Validation\Properties\TextDepth;
use Lsa\Xsl\Core\Validation\Properties\TextIndent;
use Lsa\Xsl\Core\Validation\Properties\Visibility;
use Lsa\Xsl\Core\Validation\Properties\WhiteSpaceCollapse;
use Lsa\Xsl\Core\Validation\Properties\WhiteSpaceTreatment;
use Lsa\Xsl\Core\Validation\Properties\Widows;
use Lsa\Xsl\Core\Validation\Properties\WrapOption;
use Lsa\Xsl\Core\Validation\PropertyGroups\AccessibilityProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\AuralProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\BorderPaddingBackgroundProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\FontProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\HyphenationProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\InheritedProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\MarginBlockProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\RelativePositionProperties;
use Lsa\Xsl\Core\Validation\TagGroups\BlockGroup;
use Lsa\Xsl\Core\Validation\TagGroups\InlineGroup;
use Lsa\Xsl\Core\Validation\TagGroups\NeutralGroup;

trait Block
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
                new Element(FloatElement::class, minOccurs: 0, maxOccurs: 'unbounded'),
                new Element(Footnote::class, minOccurs: 0, maxOccurs: 'unbounded'),
                new Element(Marker::class, minOccurs: 0, maxOccurs: 'unbounded'),
                new Element(InitialPropertySet::class, minOccurs: 0, maxOccurs: 1)
            ))->minOccurs(0)->maxOccurs('unbounded'))
            ->allows([
                AccessibilityProperties::class,
                AuralProperties::class,
                BorderPaddingBackgroundProperties::class,
                FontProperties::class,
                HyphenationProperties::class,
                MarginBlockProperties::class,
                RelativePositionProperties::class,

                BreakAfter::class,
                BreakBefore::class,
                Clear::class,
                Color::class,
                TextDepth::class,
                TextAltitude::class,
                HyphenationKeep::class,
                HyphenationLadderCount::class,
                Id::class,
                IndexClass::class,
                IndexKey::class,
                IntrusionDisplace::class,
                KeepTogether::class,
                KeepWithNext::class,
                KeepWithPrevious::class,
                LastLineEndIndent::class,
                LinefeedTreatment::class,
                LineHeight::class,
                LineHeightShiftAdjustment::class,
                LineStackingStrategy::class,
                Orphans::class,
                WhiteSpaceTreatment::class,
                Span::class,
                TextAlign::class,
                TextAlignLast::class,
                TextIndent::class,
                Visibility::class,
                WhiteSpaceCollapse::class,
                Widows::class,
                WrapOption::class,
            ])
            ->inheritables([
                InheritedProperties::class,
            ]);
    }
}
