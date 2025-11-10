<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tags\Table;

use Lsa\Xsl\Core\Traits\BasicAuralConformance;
use Lsa\Xsl\Core\Traits\BasicVisualConformance;
use Lsa\Xsl\Core\Validation\Tags\TableCell as ValidateTableCell;
use Lsa\Xsl\Core\Xml\Tag;

/**
 * The fo:table-cell formatting object is used to group content to be placed in a table cell.
 *
 * The "starts-row" and "ends-row" properties can be used when the input data does not have elements containing
 * the cells in each row, but instead, for example, each row starts at elements of a particular type.
 *
 * Areas:
 * The fo:table-cell formatting object generates one or more normal reference-areas. The fo:table-cell returns
 * these reference-areas and any page-level-out-of-line areas returned by the children of the fo:table-cell.
 *
 * Trait Derivation:
 * The method for deriving the border for a cell is specified by the border-collapse trait.
 * If the value of the border-collapse trait is "separate" the border is composed of two components. The first,
 * which is placed with the outside edge coincident with the table grid boundary line, has the width of half
 * the value for the border-separation trait. It is filled in accordance with the background trait of the
 * fo:table. Inside this border is placed, for each side of the cell, a border based on a border specified on
 * the cell or inherited.
 * If the value of the border-collapse trait is "collapse-with-precedence" the border for each side of the cell
 * is determined by, for each segment of a border, selecting, from all border specifications for that segment,
 * the border that has the highest precedence. It is an error if there are two such borders that have the same
 * precedence but are not identical. An implementation may recover by selecting one of the borders. Each border
 * segment is placed centered on the table grid boundary line. On devices that do not support sub-pixel
 * rendering, if an effective border width is determined to be an odd number of pixels it is implementation
 * defined on which side of the grid boundary line the odd pixel is placed.
 * If the value of the border-collapse trait is "collapse", the border for each side of the cell is determined
 * by, for each segment of a border, selecting, from all border specifications for that segment, the border
 * that has the most "eye catching" border style, see below for the details. Each border segment is placed
 * centered on the table grid boundary line. On devices that do not support sub-pixel rendering, if an
 * effective border width is determined to be an odd number of pixels it is implementation defined on which
 * side of the grid boundary line the odd pixel is placed. Where there is a conflict between the styles of
 * border segments that collapse, the following rules determine which border style "wins":
 * 1. Borders with the 'border-style' of 'hidden' take precedence over all other conflicting borders. Any
 *    border with this value suppresses all borders at this location.
 * 2. Borders with a style of 'none' have the lowest priority. Only if the border properties of all the
 *    elements meeting at this edge are 'none' will the border be omitted (but note that 'none' is the default
 *    value for the border style.)
 * 3. If none of the styles is 'hidden' and at least one of them is not 'none', then narrow borders are
 *    discarded in favor of wider ones.
 * 4. If the remaining border styles have the same 'border-width' than styles are preferred in this order:
 *    'double', 'solid', 'dashed', 'dotted', 'ridge', 'outset', 'groove', and the lowest: 'inset'.
 * 5. If border styles differ only in color, then a style set on a cell wins over one on a row, which wins over
 *    a row group, column, column group and, lastly, table.
 *
 * Constraints:
 * A table-cell occupies one or more grid units in the row-progression-direction and
 * column-progression-direction. The content-rectangle of the cell is the size of the portion of the grid the
 * cell occupies minus, for each of the four sides:
 * - If the value of the border-collapse trait is "separate": half the value of the border-separation trait;
 *   otherwise 0.
 * - If the value of the border-collapse trait is "separate": the thickness of the cell-border; otherwise
 *   half the thickness of the effective border.
 * - The cell padding.
 *
 * The method for determining the block-progression-dimension of the cell in the grid is governed by the
 * row-height trait.
 * No area may have more than one normal child area returned by the same fo:table-cell formatting object.
 * The children of each normal area returned by an fo:table-cell formatting object must be normal block-areas
 * returned by the children of the fo:table-cell, must be properly stacked, and must be properly ordered.
 * Any reference-level-out-of-line areas returned by the children of the fo:table-cell are handled as described
 * in 6.12.2 fo:float.
 *
 * @see \Lsa\Xsl\Core\Tags\OutOfLine\FloatElement
 *
 * Contents:
 * (%block;)+
 *
 * In addition this formatting object may have a sequence of zero or more fo:markers as its initial children.
 * @see https://www.w3.org/TR/xsl11/#fo_table-cell
 */
class TableCell extends Tag
{
    use BasicAuralConformance;
    use BasicVisualConformance;
    use ValidateTableCell;
}
