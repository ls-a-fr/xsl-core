<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\TagGroups\Fop;

use Lsa\Xml\Utils\Traits\HasName;
use Lsa\Xml\Utils\Validation\Choice;
use Lsa\Xml\Utils\Validation\Element;
use Lsa\Xsl\Core\Tags\Block\Block;
use Lsa\Xsl\Core\Tags\Block\BlockContainer;
use Lsa\Xsl\Core\Tags\List\ListBlock;
use Lsa\Xsl\Core\Tags\Table\Table;

/**
 * This class is used to validate against fop.xsd file.
 */
class BlockList extends Choice
{
    use HasName;

    public function __construct()
    {
        $this->name = 'block_List_FOP';
        parent::__construct(
            new Element(Block::class),
            new Element(BlockContainer::class),
            new Element(Table::class),
            new Element(ListBlock::class)
        );
    }
}
