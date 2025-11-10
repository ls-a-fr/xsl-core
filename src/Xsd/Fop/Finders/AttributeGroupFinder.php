<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\Finders;

use Lsa\Xml\Utils\Collections\NodeCollection;
use Lsa\Xml\Utils\Validation\AttributeGroup as ValidationAttributeGroup;
use Lsa\Xsd\Generator\Base\Finder;
use Lsa\Xsd\Generator\Tags\AttributeGroup;

/**
 * Find every \Lsa\Xsl\Core\Xsd\Fop\PropertyGroups classes based on namespace
 */
class AttributeGroupFinder extends Finder
{
    public function getResults(): array|NodeCollection
    {
        $found = $this->lookup('Lsa\Xsl\Core\Xsd\Fop\PropertyGroups');

        return \array_values(
            array_filter(
                array_map(function ($groupName) {
                    $object = new $groupName();
                    if ($object instanceof ValidationAttributeGroup) {
                        return new AttributeGroup($object);
                    }

                    return null;
                }, $found),
                fn ($t) => $t !== null
            )
        );
    }
}
