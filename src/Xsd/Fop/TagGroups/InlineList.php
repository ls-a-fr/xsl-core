<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\TagGroups;

use Lsa\Xml\Utils\Traits\HasName;
use Lsa\Xml\Utils\Validation\Choice;
use Lsa\Xsl\Core\Xsd\Fop\TagGroups\Fop\InlineList as FopInlineList;
use Lsa\Xsl\Core\Xsd\Fop\TagGroups\Not\InlineList as NotInlineList;

/**
 * This class is used to validate against fop.xsd file.
 */
class InlineList extends Choice
{
    use HasName;

    public function __construct()
    {
        $this->name = 'inline_List';
        parent::__construct(
            new FopInlineList(),
            new NotInlineList(),
        );
    }
}
