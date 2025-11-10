<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\TagGroups\Xsl;

use Lsa\Xml\Utils\Validation\Choice;
use Lsa\Xml\Utils\Validation\Element;
use Lsa\Xsl\Core\Tags\Block\Block;
use Lsa\Xsl\Core\Tags\Block\BlockContainer;

/**
 * List of block-level formatting objects
 *
 * @see https://www.w3.org/TR/xsl11/#d0e9451
 */
class BlockList extends Choice
{
    public function __construct()
    {
        parent::__construct(
            new Element(Block::class),
            new Element(BlockContainer::class)
        );
    }
}
