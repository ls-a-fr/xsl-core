<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Tags;

use Lsa\Xml\Utils\Validation\Definition;
use Lsa\Xml\Utils\Validation\Element;
use Lsa\Xml\Utils\Validation\Sequence;
use Lsa\Xsl\Core\Tags\Layout\RegionAfter;
use Lsa\Xsl\Core\Tags\Layout\RegionBefore;
use Lsa\Xsl\Core\Tags\Layout\RegionBody;
use Lsa\Xsl\Core\Tags\Layout\RegionEnd;
use Lsa\Xsl\Core\Tags\Layout\RegionStart;
use Lsa\Xsl\Core\Validation\Properties\MasterName;
use Lsa\Xsl\Core\Validation\Properties\PageHeight;
use Lsa\Xsl\Core\Validation\Properties\PageWidth;
use Lsa\Xsl\Core\Validation\Properties\ReferenceOrientation;
use Lsa\Xsl\Core\Validation\Properties\WritingMode;
use Lsa\Xsl\Core\Validation\PropertyGroups\InheritedProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\MarginBlockProperties;

trait SimplePageMaster
{
    /**
     * Returns this tag definition
     *
     * @return Definition This tag definition
     */
    public function asDefinition(): Definition
    {
        return (new Definition())
            ->sequence(new Sequence(
                new Element(RegionBody::class, maxOccurs: 'unbounded'),
                new Element(RegionBefore::class, minOccurs: 0),
                new Element(RegionAfter::class, minOccurs: 0),
                new Element(RegionStart::class, minOccurs: 0),
                new Element(RegionEnd::class, minOccurs: 0),
            ))
            ->require(MasterName::class)
            ->allows([
                MarginBlockProperties::class,
                PageHeight::class,
                PageWidth::class,
                ReferenceOrientation::class,
                WritingMode::class,
            ])
            ->inheritables([
                InheritedProperties::class,
            ]);
    }
}
