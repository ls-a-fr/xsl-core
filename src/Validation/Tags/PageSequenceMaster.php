<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Tags;

use Lsa\Xml\Utils\Validation\Choice;
use Lsa\Xml\Utils\Validation\Definition;
use Lsa\Xml\Utils\Validation\Element;
use Lsa\Xsl\Core\Tags\Layout\RepeatablePageMasterAlternatives;
use Lsa\Xsl\Core\Tags\Layout\RepeatablePageMasterReference;
use Lsa\Xsl\Core\Tags\Layout\SinglePageMasterReference;
use Lsa\Xsl\Core\Validation\Properties\MasterName;
use Lsa\Xsl\Core\Validation\PropertyGroups\InheritedProperties;

trait PageSequenceMaster
{
    /**
     * Returns this tag definition
     *
     * @return Definition This tag definition
     */
    public function asDefinition(): Definition
    {
        return (new Definition())
            ->choice((new Choice(
                new Element(SinglePageMasterReference::class),
                new Element(RepeatablePageMasterReference::class),
                new Element(RepeatablePageMasterAlternatives::class)
            ))->maxOccurs('unbounded'))
            ->require(MasterName::class)
            ->inheritables([
                InheritedProperties::class,
            ]);
    }
}
