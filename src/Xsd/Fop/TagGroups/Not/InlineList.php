<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\TagGroups\Not;

use Lsa\Xml\Utils\Traits\HasName;
use Lsa\Xml\Utils\Validation\Choice;
use Lsa\Xml\Utils\Validation\Element;
use Lsa\Xsl\Core\Tags\Inline\BidiOverride;
use Lsa\Xsl\Core\Tags\Inline\InlineContainer;
use Lsa\Xsl\Core\Tags\Multi\MultiToggle;

/**
 * This class is used to validate against fop.xsd file.
 */
class InlineList extends Choice
{
    use HasName;

    public function __construct()
    {
        $this->name = 'inline_List_Not';
        parent::__construct(
            new Element(BidiOverride::class),
            new Element(InlineContainer::class),
            new Element(MultiToggle::class)
        );
    }
}
