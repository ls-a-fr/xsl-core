<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\TagGroups\Xsl;

use Lsa\Xml\Utils\Validation\Choice;
use Lsa\Xml\Utils\Validation\Element;
use Lsa\Xsl\Core\Tags\Table\Table;
use Lsa\Xsl\Core\Tags\Table\TableAndCaption;
use Lsa\Xsl\Core\Tags\Table\TableBody;
use Lsa\Xsl\Core\Tags\Table\TableCell;
use Lsa\Xsl\Core\Tags\Table\TableColumn;
use Lsa\Xsl\Core\Tags\Table\TableFooter;
use Lsa\Xsl\Core\Tags\Table\TableHeader;
use Lsa\Xsl\Core\Tags\Table\TableRow;

/**
 * List of formatting objects for tables
 *
 * @see https://www.w3.org/TR/xsl11/#d0e11404
 */
class TableList extends Choice
{
    public function __construct()
    {
        parent::__construct(
            new Element(TableAndCaption::class),
            new Element(Table::class),
            new Element(TableColumn::class),
            new Element(TableHeader::class),
            new Element(TableFooter::class),
            new Element(TableBody::class),
            new Element(TableRow::class),
            new Element(TableCell::class)
        );
    }
}
