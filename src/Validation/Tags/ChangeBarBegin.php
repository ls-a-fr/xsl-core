<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Tags;

use Lsa\Xml\Utils\Validation\Definition;
use Lsa\Xsl\Core\Validation\Properties\ChangeBarClass;
use Lsa\Xsl\Core\Validation\Properties\ChangeBarColor;
use Lsa\Xsl\Core\Validation\Properties\ChangeBarOffset;
use Lsa\Xsl\Core\Validation\Properties\ChangeBarPlacement;
use Lsa\Xsl\Core\Validation\Properties\ChangeBarStyle;
use Lsa\Xsl\Core\Validation\Properties\ChangeBarWidth;
use Lsa\Xsl\Core\Validation\Properties\ZIndex;
use Lsa\Xsl\Core\Validation\PropertyGroups\AccessibilityProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\AuralProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\InheritedProperties;

trait ChangeBarBegin
{
    /**
     * Returns this tag definition
     * The beginning of a "change region" that is ended by its
     * matching fo:change-bar-end. The change region is decorated
     * with a change bar down either the start or end edge of the
     * column. The style of the change bar is determined by the
     * value of various change bar related properties.
     *
     * @return Definition This tag definition
     */
    public function asDefinition(): Definition
    {
        return (new Definition())
            ->allows([
                AccessibilityProperties::class,
                AuralProperties::class,
                ChangeBarClass::class,
                ChangeBarColor::class,
                ChangeBarOffset::class,
                ChangeBarPlacement::class,
                ChangeBarStyle::class,
                ChangeBarWidth::class,
                ZIndex::class,
            ])
            ->inheritables([
                InheritedProperties::class,
            ]);
    }
}
