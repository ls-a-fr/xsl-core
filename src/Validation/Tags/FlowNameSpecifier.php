<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Tags;

use Lsa\Xml\Utils\Validation\Definition;
use Lsa\Xsl\Core\Validation\Properties\FlowNameReference;
use Lsa\Xsl\Core\Validation\PropertyGroups\InheritedProperties;

trait FlowNameSpecifier
{
    /**
     * Returns this tag definition
     * One flow in a source-list.
     *
     * @return Definition This tag definition
     */
    public function asDefinition(): Definition
    {
        return (new Definition())
            ->allows([
                FlowNameReference::class,
            ])
            ->inheritables([
                InheritedProperties::class,
            ]);
    }
}
