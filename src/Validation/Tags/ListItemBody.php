<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Tags;

use Lsa\Xml\Utils\Validation\Choice;
use Lsa\Xml\Utils\Validation\Definition;
use Lsa\Xml\Utils\Validation\Element;
use Lsa\Xsl\Core\Tags\Other\Marker;
use Lsa\Xsl\Core\Tags\OutOfLine\FloatElement;
use Lsa\Xsl\Core\Tags\OutOfLine\Footnote;
use Lsa\Xsl\Core\Validation\Properties\Id;
use Lsa\Xsl\Core\Validation\Properties\IndexClass;
use Lsa\Xsl\Core\Validation\Properties\IndexKey;
use Lsa\Xsl\Core\Validation\Properties\KeepTogether;
use Lsa\Xsl\Core\Validation\PropertyGroups\AccessibilityProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\InheritedProperties;
use Lsa\Xsl\Core\Validation\TagGroups\BlockGroup;
use Lsa\Xsl\Core\Validation\TagGroups\NeutralGroup;

trait ListItemBody
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
                Id::class,
                IndexClass::class,
                IndexKey::class,
                KeepTogether::class,
            ])
            ->inheritables([
                InheritedProperties::class,
            ]);
    }
}
