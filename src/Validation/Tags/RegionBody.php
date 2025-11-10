<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Tags;

use Lsa\Xml\Utils\Validation\Definition;
use Lsa\Xsl\Core\Validation\Properties\Clip;
use Lsa\Xsl\Core\Validation\Properties\ColumnCount;
use Lsa\Xsl\Core\Validation\Properties\ColumnGap;
use Lsa\Xsl\Core\Validation\Properties\DisplayAlign;
use Lsa\Xsl\Core\Validation\Properties\Overflow;
use Lsa\Xsl\Core\Validation\Properties\ReferenceOrientation;
use Lsa\Xsl\Core\Validation\Properties\RegionName;
use Lsa\Xsl\Core\Validation\Properties\WritingMode;
use Lsa\Xsl\Core\Validation\PropertyGroups\BorderPaddingBackgroundProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\InheritedProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\MarginBlockProperties;

trait RegionBody
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
                BorderPaddingBackgroundProperties::class,
                MarginBlockProperties::class,
                Clip::class,
                ColumnCount::class,
                ColumnGap::class,
                DisplayAlign::class,
                Overflow::class,
                RegionName::class,
                ReferenceOrientation::class,
                WritingMode::class,
            ])
            ->inheritables([
                InheritedProperties::class,
            ]);
    }
}
