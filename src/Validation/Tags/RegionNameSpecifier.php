<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Tags;

use Lsa\Xml\Utils\Validation\Definition;
use Lsa\Xsl\Core\Validation\Properties\RegionNameReference;

trait RegionNameSpecifier
{
    /**
     * Returns this tag definition
     * One region in a target-list.
     *
     * @return Definition This tag definition
     */
    public function asDefinition(): Definition
    {
        return (new Definition())
            ->allows([
                RegionNameReference::class,
            ]);
    }
}
