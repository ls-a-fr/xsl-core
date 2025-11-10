<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Tags;

use Lsa\Xml\Utils\Validation\Choice;
use Lsa\Xml\Utils\Validation\Definition;
use Lsa\Xml\Utils\Validation\Element;
use Lsa\Xsl\Core\Tags\Indexing\IndexPageCitationList;
use Lsa\Xsl\Core\Tags\Inline\BidiOverride;
use Lsa\Xsl\Core\Tags\Inline\Character;
use Lsa\Xsl\Core\Tags\Inline\ExternalGraphic;
use Lsa\Xsl\Core\Tags\Inline\Inline;
use Lsa\Xsl\Core\Tags\Inline\InstreamForeignObject;
use Lsa\Xsl\Core\Tags\Inline\PageNumber;
use Lsa\Xsl\Core\Tags\Inline\PageNumberCitation;
use Lsa\Xsl\Core\Tags\Inline\PageNumberCitationLast;
use Lsa\Xsl\Core\Tags\Inline\ScalingValueCitation;
use Lsa\Xsl\Core\Tags\Link\BasicLink;
use Lsa\Xsl\Core\Tags\Multi\MultiToggle;
use Lsa\Xsl\Core\Validation\Properties\Color;
use Lsa\Xsl\Core\Validation\Properties\Id;
use Lsa\Xsl\Core\Validation\Properties\IndexClass;
use Lsa\Xsl\Core\Validation\Properties\IndexKey;
use Lsa\Xsl\Core\Validation\Properties\KeepWithNext;
use Lsa\Xsl\Core\Validation\Properties\KeepWithPrevious;
use Lsa\Xsl\Core\Validation\Properties\LeaderAlignment;
use Lsa\Xsl\Core\Validation\Properties\LeaderLength;
use Lsa\Xsl\Core\Validation\Properties\LeaderPattern;
use Lsa\Xsl\Core\Validation\Properties\LeaderPatternWidth;
use Lsa\Xsl\Core\Validation\Properties\LetterSpacing;
use Lsa\Xsl\Core\Validation\Properties\LineHeight;
use Lsa\Xsl\Core\Validation\Properties\RuleStyle;
use Lsa\Xsl\Core\Validation\Properties\RuleThickness;
use Lsa\Xsl\Core\Validation\Properties\TextAltitude;
use Lsa\Xsl\Core\Validation\Properties\TextDepth;
use Lsa\Xsl\Core\Validation\Properties\TextShadow;
use Lsa\Xsl\Core\Validation\Properties\VerticalAlign;
use Lsa\Xsl\Core\Validation\Properties\Visibility;
use Lsa\Xsl\Core\Validation\Properties\WordSpacing;
use Lsa\Xsl\Core\Validation\PropertyGroups\AccessibilityProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\AuralProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\BorderPaddingBackgroundProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\FontProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\InheritedProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\MarginInlineProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\RelativePositionProperties;
use Lsa\Xsl\Core\Validation\TagGroups\NeutralGroup;

trait Leader
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
                // phpcs:disable Squiz.PHP.CommentedOutCode.Found
                /*
                 * Inline, but
                 * "The content must not contain an fo:leader, fo:inline-container, fo:block-container, fo:float,
                 * fo:footnote, or fo:marker either as a direct child or as a descendant."
                 */
                new Element(BidiOverride::class),
                new Element(Character::class),
                new Element(ExternalGraphic::class),
                new Element(InstreamForeignObject::class),
                new Element(Inline::class),
                new Element(PageNumber::class),
                new Element(PageNumberCitation::class),
                new Element(PageNumberCitationLast::class),
                new Element(ScalingValueCitation::class),
                new Element(BasicLink::class),
                new Element(MultiToggle::class),
                new Element(IndexPageCitationList::class),
                new NeutralGroup()
            ))->minOccurs(0)->maxOccurs('unbounded'))
            ->allows([
                AccessibilityProperties::class,
                AuralProperties::class,
                BorderPaddingBackgroundProperties::class,
                FontProperties::class,
                MarginInlineProperties::class,
                RelativePositionProperties::class,
                Color::class,
                TextDepth::class,
                TextAltitude::class,
                Id::class,
                IndexClass::class,
                IndexKey::class,
                KeepWithNext::class,
                KeepWithPrevious::class,
                LeaderAlignment::class,
                LeaderLength::class,
                LeaderPattern::class,
                LeaderPatternWidth::class,
                RuleStyle::class,
                RuleThickness::class,
                LetterSpacing::class,
                LineHeight::class,
                TextShadow::class,
                VerticalAlign::class,
                Visibility::class,
                WordSpacing::class,
            ])
            ->inheritables([
                InheritedProperties::class,
            ]);
    }
}
