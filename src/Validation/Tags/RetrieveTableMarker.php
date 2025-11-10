<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Tags;

use Lsa\Xml\Utils\Validation\Definition;
use Lsa\Xsl\Core\Validation\Properties\RetrieveBoundaryWithinTable;
use Lsa\Xsl\Core\Validation\Properties\RetrieveClassName;
use Lsa\Xsl\Core\Validation\Properties\RetrievePositionWithinTable;

trait RetrieveTableMarker
{
    /**
     * Returns this tag definition
     *
     * @return Definition This tag definition
     */
    public function asDefinition(): Definition
    {
        return (new Definition())
            ->allows([
                RetrieveClassName::class,
                RetrievePositionWithinTable::class,
                RetrieveBoundaryWithinTable::class,
            ]);
    }
}
