<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Tags;

use Lsa\Xml\Utils\Validation\Definition;
use Lsa\Xsl\Core\Validation\Properties\Id;
use Lsa\Xsl\Core\Validation\Properties\IndexClass;
use Lsa\Xsl\Core\Validation\Properties\IndexKey;
use Lsa\Xsl\Core\Validation\PropertyGroups\InheritedProperties;

trait IndexRangeBegin
{
    /**
     * Returns this tag definition
     * The beginning of an "indexed range" associated with an index key.
     * The index range is ended by a corresponding fo:index-range-end.
     *
     * @return Definition This tag definition
     */
    public function asDefinition(): Definition
    {
        return (new Definition())
            ->require(Id::class)
            ->allows([
                IndexClass::class,
                IndexKey::class,
            ])
            ->inheritables([
                InheritedProperties::class,
            ]);
    }
}
