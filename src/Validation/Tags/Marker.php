<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Tags;

use Lsa\Xml\Utils\Validation\Choice;
use Lsa\Xml\Utils\Validation\Definition;
use Lsa\Xsl\Core\Validation\Properties\MarkerClassName;
use Lsa\Xsl\Core\Validation\PropertyGroups\InheritedProperties;
use Lsa\Xsl\Core\Validation\TagGroups\BlockGroup;
use Lsa\Xsl\Core\Validation\TagGroups\InlineGroup;

trait Marker
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
                new BlockGroup(),
                new InlineGroup()
            ))->minOccurs(0)->maxOccurs('unbounded'))
            ->allows([
                MarkerClassName::class,
            ])
            ->inheritables([
                InheritedProperties::class,
            ]);
    }
}
