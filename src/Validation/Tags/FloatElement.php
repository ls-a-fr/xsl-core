<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Tags;

use Lsa\Xml\Utils\Validation\Choice;
use Lsa\Xml\Utils\Validation\Definition;
use Lsa\Xsl\Core\Validation\Properties\Clear;
use Lsa\Xsl\Core\Validation\Properties\FloatProperty;
use Lsa\Xsl\Core\Validation\Properties\Id;
use Lsa\Xsl\Core\Validation\Properties\IndexClass;
use Lsa\Xsl\Core\Validation\Properties\IndexKey;
use Lsa\Xsl\Core\Validation\PropertyGroups\InheritedProperties;
use Lsa\Xsl\Core\Validation\TagGroups\BlockGroup;
use Lsa\Xsl\Core\Validation\TagGroups\NeutralGroup;

trait FloatElement
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
                new NeutralGroup()
            ))->maxOccurs('unbounded'))
            ->allows([
                FloatProperty::class,
                Clear::class,
                Id::class,
                IndexClass::class,
                IndexKey::class,
            ])
            ->inheritables([
                InheritedProperties::class,
            ]);
    }
}
