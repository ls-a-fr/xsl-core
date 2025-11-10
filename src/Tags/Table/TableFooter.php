<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tags\Table;

use Lsa\Xsl\Core\Contracts\HasAuralFallback;
use Lsa\Xsl\Core\Contracts\HasVisualFallback;
use Lsa\Xsl\Core\Tags\Layout\Root;
use Lsa\Xsl\Core\Traits\ExtendedAuralConformance;
use Lsa\Xsl\Core\Traits\ExtendedVisualConformance;
use Lsa\Xsl\Core\Validation\Tags\TableFooter as ValidateTableFooter;
use Lsa\Xsl\Core\Xml\Tag;

/**
 * The fo:table-footer formatting object is used to contain the content of the table footer.
 *
 * Areas:
 * The fo:table-footer formatting object does not generate any areas. The fo:table-footer formatting object
 * returns the sequence of areas created by concatenating the sequences of areas returned by each of the
 * children of the fo:table-footer.
 *
 * Constraints:
 * The order of concatenation of the sequences of areas returned by the children of the fo:table-footer is the
 * same order as the children are ordered under the fo:table-footer.
 *
 * Contents:
 * (table-row+|table-cell+)
 *
 * The fo:table-footer has fo:table-row (one or more) as its children, or alternatively fo:table-cell (one or
 * more). In the latter case cells are grouped into rows using the starts-row and ends-row properties.
 * In addition this formatting object may have a sequence of zero or more fo:markers as its initial children.
 *
 * @see https://www.w3.org/TR/xsl11/#fo_table-footer
 */
class TableFooter extends Tag implements HasAuralFallback, HasVisualFallback
{
    use ExtendedAuralConformance;
    use ExtendedVisualConformance;
    use ValidateTableFooter;

    public function getVisualFallback(Root $root): ?Tag
    {
        // Fallback: place at end of table.
        $this->fallback();

        return null;
    }

    public function getAuralFallback(Root $root): ?Tag
    {
        // Fallback: speak at end of table
        $this->fallback();

        return null;
    }

    /**
     * Common fallback management
     */
    private function fallback(): void
    {
        $table = $this->ancestor(Table::class);
        if ($table === null) {
            return;
        }

        $table->children($this->getChildren());
        $this->markAsUnrenderable();
    }
}
