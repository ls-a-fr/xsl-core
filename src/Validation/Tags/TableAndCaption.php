<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Tags;

use Lsa\Xml\Utils\Validation\Definition;
use Lsa\Xml\Utils\Validation\Element;
use Lsa\Xml\Utils\Validation\Sequence;
use Lsa\Xsl\Core\Tags\Table\Table;
use Lsa\Xsl\Core\Tags\Table\TableCaption;
use Lsa\Xsl\Core\Validation\Properties\BreakAfter;
use Lsa\Xsl\Core\Validation\Properties\BreakBefore;
use Lsa\Xsl\Core\Validation\Properties\CaptionSide;
use Lsa\Xsl\Core\Validation\Properties\Clear;
use Lsa\Xsl\Core\Validation\Properties\Id;
use Lsa\Xsl\Core\Validation\Properties\IndexClass;
use Lsa\Xsl\Core\Validation\Properties\IndexKey;
use Lsa\Xsl\Core\Validation\Properties\IntrusionDisplace;
use Lsa\Xsl\Core\Validation\Properties\KeepTogether;
use Lsa\Xsl\Core\Validation\Properties\KeepWithNext;
use Lsa\Xsl\Core\Validation\Properties\KeepWithPrevious;
use Lsa\Xsl\Core\Validation\Properties\TextAlign;
use Lsa\Xsl\Core\Validation\PropertyGroups\AccessibilityProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\AuralProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\BorderPaddingBackgroundProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\InheritedProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\MarginBlockProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\RelativePositionProperties;

trait TableAndCaption
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
                new Element(TableCaption::class, minOccurs: 0),
                new Element(Table::class)
            ))
            ->allows([
                AccessibilityProperties::class,
                AuralProperties::class,
                BorderPaddingBackgroundProperties::class,
                MarginBlockProperties::class,
                RelativePositionProperties::class,
                BreakAfter::class,
                BreakBefore::class,
                CaptionSide::class,
                Clear::class,
                Id::class,
                IndexClass::class,
                IndexKey::class,
                IntrusionDisplace::class,
                KeepTogether::class,
                KeepWithNext::class,
                KeepWithPrevious::class,
                TextAlign::class,
            ])
            ->inheritables([
                InheritedProperties::class,
            ]);
    }
}
