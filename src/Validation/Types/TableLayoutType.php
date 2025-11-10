<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates TableLayout property.
 *
 * @link https://www.w3.org/TR/xsl11/#table-layout
 */
class TableLayoutType extends Type implements Validator
{
    /**
     * Use any automatic table layout algorithm
     *
     * In this algorithm (which generally requires no more than two passes), the table's width is
     * given by the width of its columns (and intervening borders). This algorithm reflects the
     * behavior of several popular HTML user agents at the writing of this specification. UAs are
     * not required to implement this algorithm to determine the table layout in the case that
     * 'table-layout' is 'auto'; they can use any other algorithm even if it results in different
     * behavior.
     *
     * Input to the automatic table layout must only include the width of the containing block and
     * the content of, and any CSS properties set on, the table and any of its descendants.
     */
    public const AUTO = 'auto';

    /**
     * Use the fixed table layout algorithm.
     *
     * With this (fast) algorithm, the horizontal layout of the table does not depend on the contents
     * of the cells; it only depends on the table's width, the width of the columns, and borders or
     * cell spacing.
     * The table's width may be specified explicitly with the 'width' property. A value of 'auto'
     * (for both 'display: table' and 'display: inline-table') means use the automatic table layout
     * algorithm. However, if the table is a block-level table ('display: table') in normal flow, a
     * UA may (but does not have to) use the algorithm of 10.3.3 to compute a width and apply fixed
     * table layout even if the specified width is 'auto'.
     *
     * In the fixed table layout algorithm, the width of each column is determined as follows:
     * - A column element with a value other than 'auto' for the 'width' property sets the width for
     * that column.
     * - Otherwise, a cell in the first row with a value other than 'auto' for the 'width' property
     * determines the width for that column. If the cell spans more than one column, the width is
     * divided over the columns.
     * - Any remaining columns equally divide the remaining horizontal table space (minus borders or
     * cell spacing).
     * The width of the table is then the greater of the value of the 'width' property for the table
     * element and the sum of the column widths (plus cell spacing or borders). If the table is wider
     * than the columns, the extra space should be distributed over the columns.
     *
     * If a subsequent row has more columns than the greater of the number determined by the
     * table-column elements and the number determined by the first row, then additional columns may
     * not be rendered. CSS 2.2 does not define the width of the columns and the table if they are
     * rendered. When using 'table-layout: fixed', authors should not omit columns from the first row.
     *
     * In this manner, the user agent can begin to lay out the table once the entire first row has
     * been received. Cells in subsequent rows do not affect column widths. Any cell that has content
     * that overflows uses the 'overflow' property to determine whether to clip the overflow content.
     */
    public const FIXED = 'fixed';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::AUTO,
            self::FIXED,
            self::INHERIT,
        ]));
    }
}
