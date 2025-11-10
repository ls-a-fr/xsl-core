<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Tags;

use Lsa\Xml\Utils\Validation\Definition;
use Lsa\Xsl\Core\Validation\Properties\Color;
use Lsa\Xsl\Core\Validation\Properties\LetterSpacing;
use Lsa\Xsl\Core\Validation\Properties\LineHeight;
use Lsa\Xsl\Core\Validation\Properties\ScoreSpaces;
use Lsa\Xsl\Core\Validation\Properties\TextDecoration;
use Lsa\Xsl\Core\Validation\Properties\TextShadow;
use Lsa\Xsl\Core\Validation\Properties\TextTransform;
use Lsa\Xsl\Core\Validation\Properties\WordSpacing;
use Lsa\Xsl\Core\Validation\PropertyGroups\AccessibilityProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\AuralProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\BorderPaddingBackgroundProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\FontProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\InheritedProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\RelativePositionProperties;

trait InitialPropertySet
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
                AccessibilityProperties::class,
                AuralProperties::class,
                BorderPaddingBackgroundProperties::class,
                FontProperties::class,
                RelativePositionProperties::class,
                Color::class,
                LetterSpacing::class,
                LineHeight::class,
                ScoreSpaces::class,
                TextDecoration::class,
                TextShadow::class,
                TextTransform::class,
                WordSpacing::class,
            ])
            ->inheritables([
                InheritedProperties::class,
            ]);
    }
}
