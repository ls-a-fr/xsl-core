<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\TagGroups\Fop;

use Lsa\Xml\Utils\Traits\HasName;
use Lsa\Xml\Utils\Validation\Choice;
use Lsa\Xml\Utils\Validation\Element;
use Lsa\Xsl\Core\Tags\Inline\Character;
use Lsa\Xsl\Core\Tags\Inline\ExternalGraphic;
use Lsa\Xsl\Core\Tags\Inline\Inline;
use Lsa\Xsl\Core\Tags\Inline\InstreamForeignObject;
use Lsa\Xsl\Core\Tags\Inline\Leader;
use Lsa\Xsl\Core\Tags\Inline\PageNumber;
use Lsa\Xsl\Core\Tags\Inline\PageNumberCitation;
use Lsa\Xsl\Core\Tags\Link\BasicLink;

/**
 * This class is used to validate against fop.xsd file.
 */
class InlineList extends Choice
{
    use HasName;

    public function __construct()
    {
        $this->name = 'inline_List_FOP';
        parent::__construct(
            new Element(Character::class),
            new Element(ExternalGraphic::class),
            new Element(InstreamForeignObject::class),
            new Element(Inline::class),
            new Element(Leader::class),
            new Element(PageNumber::class),
            new Element(PageNumberCitation::class),
            new Element(BasicLink::class)
        );
    }
}
