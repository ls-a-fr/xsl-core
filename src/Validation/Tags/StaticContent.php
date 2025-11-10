<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Tags;

use Lsa\Xml\Utils\Validation\Choice;
use Lsa\Xml\Utils\Validation\Definition;
use Lsa\Xml\Utils\Validation\Element;
use Lsa\Xsl\Core\Tags\OutOfLine\FloatElement;
use Lsa\Xsl\Core\Tags\OutOfLine\Footnote;
use Lsa\Xsl\Core\Validation\Properties\FlowName;
use Lsa\Xsl\Core\Validation\Properties\Id;
use Lsa\Xsl\Core\Validation\Properties\IndexClass;
use Lsa\Xsl\Core\Validation\Properties\IndexKey;
use Lsa\Xsl\Core\Validation\PropertyGroups\InheritedProperties;
use Lsa\Xsl\Core\Validation\TagGroups\BlockGroup;
use Lsa\Xsl\Core\Validation\TagGroups\NeutralGroup;
use Lsa\Xsl\Core\Validation\TagGroups\PointGroup;

trait StaticContent
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
                new PointGroup(),
                new Element(FloatElement::class),
                new Element(Footnote::class)
            ))->maxOccurs('unbounded'))
            ->require(FlowName::class)
            ->allows([
                Id::class,
                IndexClass::class,
                IndexKey::class,
            ])
            ->inheritables([
                InheritedProperties::class,
            ]);
    }
}
