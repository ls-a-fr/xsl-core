<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\TagGroups\Xsl;

use Lsa\Xml\Utils\Validation\Choice;
use Lsa\Xml\Utils\Validation\Element;
use Lsa\Xsl\Core\Tags\List\ListBlock;
use Lsa\Xsl\Core\Tags\List\ListItem;
use Lsa\Xsl\Core\Tags\List\ListItemBody;
use Lsa\Xsl\Core\Tags\List\ListItemLabel;

/**
 * List of formatting objects for lists
 *
 * @see https://www.w3.org/TR/xsl11/#d0e12374
 */
class ListList extends Choice
{
    public function __construct()
    {
        parent::__construct(
            new Element(ListBlock::class),
            new Element(ListItem::class),
            new Element(ListItemBody::class),
            new Element(ListItemLabel::class)
        );
    }
}
