<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xml\Utils\Xml\Base\EmptyTag;
use Lsa\Xsl\Core\Tags\Table\Table;
use Lsa\Xsl\Core\Validation\Types\ColumnWidthType;

/**
 * XSL Definition:
 * - Value:  `<length>` | `<percentage>`
 * - Initial:  see prose
 * - Inherited:  no
 * - Percentages:  refer to width of table
 * - Media:  visual
 *
 * @link https://www.w3.org/TR/xsl11/#column-width
 */
class ColumnWidth extends TypedAttribute
{
    public function __construct()
    {
        parent::__construct('column-width', ColumnWidthType::class);
    }

    protected function reconsiderRequired(?EmptyTag $currentNode = null): bool
    {
        return $currentNode?->ancestor(Table::class)?->attributes->get('table-layout', 'fixed') === 'fixed';
    }
}
