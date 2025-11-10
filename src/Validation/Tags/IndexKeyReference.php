<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Tags;

use Lsa\Xml\Utils\Validation\Definition;
use Lsa\Xml\Utils\Validation\Element;
use Lsa\Xml\Utils\Validation\Sequence;
use Lsa\Xsl\Core\Tags\Indexing\IndexPageNumberPrefix;
use Lsa\Xsl\Core\Tags\Indexing\IndexPageNumberSuffix;
use Lsa\Xsl\Core\Validation\Properties\PageNumberTreatment;
use Lsa\Xsl\Core\Validation\Properties\RefIndexKey;
use Lsa\Xsl\Core\Validation\PropertyGroups\InheritedProperties;

trait IndexKeyReference
{
    /**
     * Returns this tag definition
     * Generates a set of cited page items for all the occurrences
     * of the specified index-key.
     *
     * @return Definition This tag definition
     */
    public function asDefinition(): Definition
    {
        return (new Definition())
            ->sequence(new Sequence(
                new Element(IndexPageNumberPrefix::class, maxOccurs: 1),
                new Element(IndexPageNumberSuffix::class, maxOccurs: 1),
            ))
            ->require(RefIndexKey::class)
            ->allows([
                PageNumberTreatment::class,
            ])
            ->inheritables([
                InheritedProperties::class,
            ]);
    }
}
