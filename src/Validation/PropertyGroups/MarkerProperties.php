<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\PropertyGroups;

use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xsl\Core\Validation\Properties\MarkerClassName;
use Lsa\Xsl\Core\Validation\Properties\RetrieveBoundary;
use Lsa\Xsl\Core\Validation\Properties\RetrieveBoundaryWithinTable;
use Lsa\Xsl\Core\Validation\Properties\RetrieveClassName;
use Lsa\Xsl\Core\Validation\Properties\RetrievePosition;
use Lsa\Xsl\Core\Validation\Properties\RetrievePositionWithinTable;

/**
 * Properties for markers
 *
 * @see https://www.w3.org/TR/xsl11/#d0e28896
 */
class MarkerProperties extends AttributeGroup
{
    public function __construct()
    {
        parent::__construct([
            MarkerClassName::class,
            RetrieveBoundaryWithinTable::class,
            RetrieveClassName::class,
            RetrievePosition::class,
            RetrieveBoundary::class,
            RetrievePositionWithinTable::class,
        ]);
    }
}
