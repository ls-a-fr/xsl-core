<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\TagGroups;

use Lsa\Xml\Utils\Traits\HasName;
use Lsa\Xml\Utils\Validation\Choice;
use Lsa\Xml\Utils\Validation\Element;
use Lsa\Xsl\Core\Tags\OutOfLine\Footnote;

/**
 * This class is used to validate against fop.xsd file.
 */
class FootnoteList extends Choice
{
    use HasName;

    public function __construct()
    {
        $this->name = 'footnote_List';
        parent::__construct(
            new Element(Footnote::class)
        );
    }
}
