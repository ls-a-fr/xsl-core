<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Tags;

use Lsa\Xml\Utils\Validation\Choice;
use Lsa\Xml\Utils\Validation\Definition;
use Lsa\Xsl\Core\Validation\Properties\Color;
use Lsa\Xsl\Core\Validation\Properties\LineHeight;
use Lsa\Xsl\Core\Validation\Properties\Visibility;
use Lsa\Xsl\Core\Validation\PropertyGroups\AccessibilityProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\AuralProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\BorderPaddingBackgroundProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\FontProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\InheritedProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\MarginInlineProperties;
use Lsa\Xsl\Core\Validation\TagGroups\InlineGroup;
use Lsa\Xsl\Core\Validation\TagGroups\NeutralGroup;

trait Title
{
    /**
     * Returns this tag definition
     *
     * @return Definition This tag definition
     */
    public function asDefinition(): Definition
    {
        return (new Definition())
            ->mixed()
            ->choice((new Choice(
                new InlineGroup(),
                new NeutralGroup()
            ))->minOccurs(0)->maxOccurs('unbounded'))
            ->allows([
                AccessibilityProperties::class,
                AuralProperties::class,
                BorderPaddingBackgroundProperties::class,
                FontProperties::class,
                MarginInlineProperties::class,
                Color::class,
                LineHeight::class,
                Visibility::class,
            ])
            ->inheritables([
                InheritedProperties::class,
            ]);
    }
}
