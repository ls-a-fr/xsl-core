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
use Lsa\Xsl\Core\Validation\Properties\BorderAfterPrecedence;
use Lsa\Xsl\Core\Validation\Properties\BorderBeforePrecedence;
use Lsa\Xsl\Core\Validation\Properties\BorderEndPrecedence;
use Lsa\Xsl\Core\Validation\Properties\BorderStartPrecedence;
use Lsa\Xsl\Core\Validation\Properties\ColumnNumber;
use Lsa\Xsl\Core\Validation\Properties\DisplayAlign;
use Lsa\Xsl\Core\Validation\Properties\EmptyCells;
use Lsa\Xsl\Core\Validation\Properties\EndsRow;
use Lsa\Xsl\Core\Validation\Properties\Height;
use Lsa\Xsl\Core\Validation\Properties\Id;
use Lsa\Xsl\Core\Validation\Properties\IndexClass;
use Lsa\Xsl\Core\Validation\Properties\IndexKey;
use Lsa\Xsl\Core\Validation\Properties\InlineProgressionDimension;
use Lsa\Xsl\Core\Validation\Properties\NumberColumnsSpanned;
use Lsa\Xsl\Core\Validation\Properties\NumberRowsSpanned;
use Lsa\Xsl\Core\Validation\Properties\RelativeAlign;
use Lsa\Xsl\Core\Validation\Properties\StartsRow;
use Lsa\Xsl\Core\Validation\Properties\Width;
use Lsa\Xsl\Core\Validation\PropertyGroups\AccessibilityProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\AuralProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\BorderPaddingBackgroundProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\InheritedProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\RelativePositionProperties;
use Lsa\Xsl\Core\Validation\TagGroups\BlockGroup;
use Lsa\Xsl\Core\Validation\TagGroups\NeutralGroup;

trait TableCell
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
                AccessibilityProperties::class,
                AuralProperties::class,
                BorderPaddingBackgroundProperties::class,
                RelativePositionProperties::class,
                BorderAfterPrecedence::class,
                BorderBeforePrecedence::class,
                BorderEndPrecedence::class,
                BorderStartPrecedence::class,
                BlockProgressionDimension::class,
                ColumnNumber::class,
                DisplayAlign::class,
                RelativeAlign::class,
                EmptyCells::class,
                EndsRow::class,
                Height::class,
                Id::class,
                IndexClass::class,
                IndexKey::class,
                InlineProgressionDimension::class,
                NumberColumnsSpanned::class,
                NumberRowsSpanned::class,
                StartsRow::class,
                Width::class,
            ])
            ->inheritables([
                InheritedProperties::class,
            ]);
    }
}
