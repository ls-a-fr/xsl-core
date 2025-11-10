<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Tags;

use Lsa\Xml\Utils\Validation\Definition;
use Lsa\Xsl\Core\Validation\Properties\ChangeBarClass;
use Lsa\Xsl\Core\Validation\PropertyGroups\AccessibilityProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\AuralProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\InheritedProperties;

trait ChangeBarEnd
{
    /**
     * Returns this tag definition
     * The end of a "change region" that is started by its matching fo:change-bar-begin.
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
            ])
            ->inheritables([
                InheritedProperties::class,
            ]);
    }
}
