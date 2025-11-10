<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\TagGroups\Xsl;

use Lsa\Xml\Utils\Validation\Choice;
use Lsa\Xml\Utils\Validation\Element;
use Lsa\Xsl\Core\Tags\Inline\BidiOverride;
use Lsa\Xsl\Core\Tags\Inline\Character;
use Lsa\Xsl\Core\Tags\Inline\ExternalGraphic;
use Lsa\Xsl\Core\Tags\Inline\FolioPrefix;
use Lsa\Xsl\Core\Tags\Inline\FolioSuffix;
use Lsa\Xsl\Core\Tags\Inline\InitialPropertySet;
use Lsa\Xsl\Core\Tags\Inline\Inline;
use Lsa\Xsl\Core\Tags\Inline\InlineContainer;
use Lsa\Xsl\Core\Tags\Inline\InstreamForeignObject;
use Lsa\Xsl\Core\Tags\Inline\Leader;
use Lsa\Xsl\Core\Tags\Inline\PageNumber;
use Lsa\Xsl\Core\Tags\Inline\PageNumberCitation;
use Lsa\Xsl\Core\Tags\Inline\PageNumberCitationLast;
use Lsa\Xsl\Core\Tags\Inline\ScalingValueCitation;

/**
 * List of inline-level formatting objects
 *
 * @see https://www.w3.org/TR/xsl11/#d0e9759
 */
class InlineList extends Choice
{
    public function __construct()
    {
        parent::__construct(
            new Element(BidiOverride::class),
            new Element(Character::class),
            new Element(InitialPropertySet::class),
            new Element(ExternalGraphic::class),
            new Element(InstreamForeignObject::class),
            new Element(Inline::class),
            new Element(InlineContainer::class),
            new Element(Leader::class),
            new Element(PageNumber::class),
            new Element(PageNumberCitation::class),
            new Element(PageNumberCitationLast::class),
            new Element(FolioPrefix::class),
            new Element(FolioSuffix::class),
            new Element(ScalingValueCitation::class)
        );
    }
}
