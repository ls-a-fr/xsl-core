<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Tags;

use Lsa\Xml\Utils\Validation\Definition;
use Lsa\Xsl\Core\Validation\Properties\Clip;
use Lsa\Xsl\Core\Validation\Properties\DisplayAlign;
use Lsa\Xsl\Core\Validation\Properties\Extent;
use Lsa\Xsl\Core\Validation\Properties\Overflow;
use Lsa\Xsl\Core\Validation\Properties\Precedence;
use Lsa\Xsl\Core\Validation\Properties\ReferenceOrientation;
use Lsa\Xsl\Core\Validation\Properties\RegionName;
use Lsa\Xsl\Core\Validation\Properties\WritingMode;
use Lsa\Xsl\Core\Validation\PropertyGroups\BorderPaddingBackgroundProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\InheritedProperties;

trait RegionAfter
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
                Clip::class,
                DisplayAlign::class,
                Extent::class,
                Overflow::class,
                Precedence::class,
                RegionName::class,
                ReferenceOrientation::class,
                WritingMode::class,
            ])
            ->inheritables([
                InheritedProperties::class,
            ]);
    }
}
