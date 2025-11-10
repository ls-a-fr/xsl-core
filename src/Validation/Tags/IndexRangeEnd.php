<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Tags;

use Lsa\Xml\Utils\Validation\Definition;
use Lsa\Xsl\Core\Validation\Properties\RefId;
use Lsa\Xsl\Core\Validation\PropertyGroups\InheritedProperties;

trait IndexRangeEnd
{
    /**
     * Returns this tag definition
     * The end of an "indexed range" that is started by its matching fo:index-range-begin.
     * Returns this tag definition
     *
     * @return Definition This tag definition
     */
    public function asDefinition(): Definition
    {
        return (new Definition())
            ->allows([
                RefId::class,
            ])
            ->inheritables([
                InheritedProperties::class,
            ]);
    }
}
