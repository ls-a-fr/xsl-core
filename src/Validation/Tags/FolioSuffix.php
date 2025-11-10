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
use Lsa\Xsl\Core\Tags\Inline\InlineContainer;
use Lsa\Xsl\Core\Tags\Inline\InstreamForeignObject;
use Lsa\Xsl\Core\Tags\Inline\Leader;
use Lsa\Xsl\Core\Tags\Inline\ScalingValueCitation;
use Lsa\Xsl\Core\Tags\Link\BasicLink;
use Lsa\Xsl\Core\Tags\Multi\MultiToggle;
use Lsa\Xsl\Core\Tags\OutOfLine\FloatElement;
use Lsa\Xsl\Core\Tags\OutOfLine\Footnote;
use Lsa\Xsl\Core\Validation\PropertyGroups\InheritedProperties;
use Lsa\Xsl\Core\Validation\TagGroups\NeutralGroup;

trait FolioSuffix
{
    /**
     * Returns this tag definition
     * A static prefix for the folio numbers within a page-sequence.
     *
     * @return Definition This tag definition
     */
    public function asDefinition(): Definition
    {
        return (new Definition())
            ->choice((new Choice(
                // Inline group without page number, page number citation and page number citation last
                new Element(BidiOverride::class),
                new Element(Character::class),
                new Element(ExternalGraphic::class),
                new Element(InstreamForeignObject::class),
                new Element(Inline::class),
                new Element(InlineContainer::class),
                new Element(Leader::class),
                new Element(ScalingValueCitation::class),
                new Element(BasicLink::class),
                new Element(MultiToggle::class),
                new Element(IndexPageCitationList::class),
                new NeutralGroup(),
                new Element(FloatElement::class, minOccurs: 0, maxOccurs: 'unbounded'),
                new Element(Footnote::class, minOccurs: 0, maxOccurs: 'unbounded'),
            ))->minOccurs(0)->maxOccurs('unbounded'))
            ->inheritables([
                InheritedProperties::class,
            ]);
    }
}
