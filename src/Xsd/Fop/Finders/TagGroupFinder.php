<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\Finders;

use Lsa\Xml\Utils\Collections\NodeCollection;
use Lsa\Xml\Utils\Validation\Choice;
use Lsa\Xsd\Generator\Base\Finder;
use Lsa\Xsd\Generator\Tags\TagGroup;

/**
 * Find every \Lsa\Xsl\Core\Xsd\Fop\TagGroups classes based on namespace
 */
class TagGroupFinder extends Finder
{
    public function getResults(): array|NodeCollection
    {
        $found = $this->lookup('Lsa\Xsl\Core\Xsd\Fop\TagGroups');

        return \array_values(
            array_filter(
                array_map(function ($tagGroupName) {
                    $object = new $tagGroupName();
                    if ($object instanceof Choice) {
                        return new TagGroup($object);
                    }

                    return null;
                }, $found),
                fn ($t) => $t !== null
            )
        );
    }
}
