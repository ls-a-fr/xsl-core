<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\TagGroups;

use Lsa\Xml\Utils\Validation\Choice;
use Lsa\Xml\Utils\Validation\Element;
use Lsa\Xsl\Core\Tags\Block\Block;
use Lsa\Xsl\Core\Tags\Block\BlockContainer;
use Lsa\Xsl\Core\Tags\List\ListBlock;
use Lsa\Xsl\Core\Tags\Table\Table;
use Lsa\Xsl\Core\Tags\Table\TableAndCaption;

/**
 * A group that encloses every tags behaving as a container
 *
 * @see https://www.w3.org/TR/xsl11/#block.fo.list
 */
class BlockGroup extends Choice
{
    public function __construct()
    {
        parent::__construct(
            new Element(Block::class),
            new Element(BlockContainer::class),
            new Element(TableAndCaption::class),
            new Element(Table::class),
            new Element(ListBlock::class)
        );
    }
}
