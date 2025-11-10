<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\TagGroups;

use Lsa\Xml\Utils\Traits\HasName;
use Lsa\Xml\Utils\Validation\Choice;
use Lsa\Xsl\Core\Xsd\Fop\TagGroups\Fop\BlockList as FopBlockList;
use Lsa\Xsl\Core\Xsd\Fop\TagGroups\Not\BlockList as NotBlockList;

/**
 * This class is used to validate against fop.xsd file.
 */
class BlockList extends Choice
{
    use HasName;

    public function __construct()
    {
        $this->name = 'block_List';
        parent::__construct(
            new FopBlockList(),
            new NotBlockList(),
        );
    }
}
