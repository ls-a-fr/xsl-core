<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Tags;

use Lsa\Xml\Utils\Validation\Definition;
use Lsa\Xsl\Core\Validation\Properties\MasterReference;
use Lsa\Xsl\Core\Validation\PropertyGroups\InheritedProperties;

trait SinglePageMasterReference
{
    /**
     * Returns this tag definition
     *
     * @return Definition This tag definition
     */
    public function asDefinition(): Definition
    {
        return (new Definition())
            ->require(MasterReference::class)
            ->inheritables([
                InheritedProperties::class,
            ]);
    }
}
