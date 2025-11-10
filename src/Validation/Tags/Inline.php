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
use Lsa\Xsl\Core\Validation\Properties\Color;
use Lsa\Xsl\Core\Validation\Properties\Height;
use Lsa\Xsl\Core\Validation\Properties\Id;
use Lsa\Xsl\Core\Validation\Properties\IndexClass;
use Lsa\Xsl\Core\Validation\Properties\IndexKey;
use Lsa\Xsl\Core\Validation\Properties\InlineProgressionDimension;
use Lsa\Xsl\Core\Validation\Properties\KeepTogether;
use Lsa\Xsl\Core\Validation\Properties\KeepWithNext;
use Lsa\Xsl\Core\Validation\Properties\KeepWithPrevious;
use Lsa\Xsl\Core\Validation\Properties\LineHeight;
use Lsa\Xsl\Core\Validation\Properties\TextDecoration;
use Lsa\Xsl\Core\Validation\Properties\VerticalAlign;
use Lsa\Xsl\Core\Validation\Properties\Visibility;
use Lsa\Xsl\Core\Validation\Properties\Width;
use Lsa\Xsl\Core\Validation\Properties\WrapOption;
use Lsa\Xsl\Core\Validation\PropertyGroups\AccessibilityProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\AuralProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\BorderPaddingBackgroundProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\FontProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\InheritedProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\MarginInlineProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\RelativePositionProperties;
use Lsa\Xsl\Core\Validation\TagGroups\BlockGroup;
use Lsa\Xsl\Core\Validation\TagGroups\InlineGroup;
use Lsa\Xsl\Core\Validation\TagGroups\NeutralGroup;

trait Inline
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
                new Element(Marker::class, minOccurs: 0, maxOccurs: 'unbounded')
            ))->minOccurs(0)->maxOccurs('unbounded'))
            ->allows([
                AccessibilityProperties::class,
                AuralProperties::class,
                BorderPaddingBackgroundProperties::class,
                FontProperties::class,
                MarginInlineProperties::class,
                RelativePositionProperties::class,
                BlockProgressionDimension::class,
                Color::class,
                Height::class,
                Id::class,
                IndexClass::class,
                IndexKey::class,
                InlineProgressionDimension::class,
                KeepTogether::class,
                KeepWithNext::class,
                KeepWithPrevious::class,
                LineHeight::class,
                TextDecoration::class,
                VerticalAlign::class,
                Visibility::class,
                Width::class,
                WrapOption::class,
            ])
            ->inheritables([
                InheritedProperties::class,
            ]);
    }
}
