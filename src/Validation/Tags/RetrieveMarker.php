<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Tags;

use Lsa\Xml\Utils\Validation\Definition;
use Lsa\Xsl\Core\Validation\Properties\RetrieveBoundary;
use Lsa\Xsl\Core\Validation\Properties\RetrieveClassName;
use Lsa\Xsl\Core\Validation\Properties\RetrievePosition;
use Lsa\Xsl\Core\Validation\PropertyGroups\InheritedProperties;

trait RetrieveMarker
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
                RetrievePosition::class,
                RetrieveBoundary::class,
            ])
            ->inheritables([
                InheritedProperties::class,
            ]);
    }
}
