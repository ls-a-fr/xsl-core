<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Tags;

use Lsa\Xml\Utils\Validation\Definition;
use Lsa\Xsl\Core\Validation\Properties\ColorProfileName;
use Lsa\Xsl\Core\Validation\Properties\RenderingIntent;
use Lsa\Xsl\Core\Validation\Properties\Source;
use Lsa\Xsl\Core\Validation\PropertyGroups\InheritedProperties;

trait ColorProfile
{
    /**
     * Returns this tag definition
     *
     * @return Definition This tag definition
     */
    public function asDefinition(): Definition
    {
        return (new Definition())
            ->requires([
                ColorProfileName::class,
                Source::class,
            ])
            ->allows([
                RenderingIntent::class,
            ])
            ->inheritables([
                InheritedProperties::class,
            ]);
    }
}
