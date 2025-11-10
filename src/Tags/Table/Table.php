<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tags\Table;

use Lsa\Xsl\Core\Traits\BasicAuralConformance;
use Lsa\Xsl\Core\Traits\BasicVisualConformance;
use Lsa\Xsl\Core\Validation\Tags\Table as ValidateTable;
use Lsa\Xsl\Core\Xml\Tag;

/**
 * The fo:table flow object is used for formatting the tabular material of a table.
 *
 * The fo:table flow object and its child flow objects model the visual layout of a table in a "row primary"
 * manner. A complete table may be seen as consisting of a grid of rows and columns where each cell occupies
 * one or more grid units in the row-progression-direction and column-progression-direction.
 * The table content is divided into a header (optional), footer (optional), and one or more bodies.
 * Properties specify if the headers and footers should be repeated at a break in the table. Each of these
 * parts occupies one or more rows in the table grid.
 *
 * Areas:
 * The fo:table formatting object generates and returns one or more normal block-areas. These areas consist of
 * the content of the fo:table-header (unless omitted as specified by the "table-omit-header-at-break"
 * property), followed by some portion of the content of the fo:table-body(s), followed by the content of the
 * fo:table-footer (unless omitted as specified by the "table-omit-footer-at-break" property). In addition
 * the fo:table returns any page-level-out-of-line areas, and any reference-level-out-of-line areas returned
 * by the children of the fo:table.
 * The areas generated and returned by the fo:table formatting object have as children:
 * - Areas, with only background, corresponding to the table-header, table-footer, table-body, spanned columns,
 *   columns, and rows.
 *   Note:
 *   The spanned columns (fo:table-column with a "number-columns-spanned" value greater than 1) are used in
 *   the same way as the "column groups" in CSS2 for determining the background.
 * - Areas returned by the fo:table-cell formatting objects.
 *
 * These areas have a z-index controlling the rendering order determined in accordance with 17.5.1 of the CSS2
 * specification.
 *
 * @see http://www.w3.org/TR/REC-CSS2/tables.html#table-layers
 *
 * Note:
 * A cell that is spanned may have a different background in each of the grid units it occupies.
 *
 * Trait Derivation:
 * The column-progression-direction and row-progression-direction are determined by the writing-mode trait.
 * Columns use the inline-progression-direction, and rows use the block-progression-direction.
 * The method for deriving the border traits for a table is specified by the "border-collapse" property.
 * If the value of the "border-collapse" property is "separate" the border is composed of two components. The
 * first, which is placed with the inside edge coincident with the outermost table grid boundary line, has the
 * width of half the value for the "border-separation" property. It is filled in accordance with the
 * "background" property of the fo:table. Second, outside the outermost table grid boundary line is placed,
 * for each side of the table, a border based on a border specified on the table.
 * If the value of the "border-collapse" property is "collapse" or "collapse-with-precedence" the border is
 * determined, for each segment, at the cell level.
 *
 * Note:
 * By specifying "collapse-with-precedence" and an appropriately high precedence on the border specification
 * for the fo:table one may ensure that this specification is the one used on all border segments.
 *
 * Constraints:
 * No area may have more than one normal child area returned by the same fo:table formatting object.
 * The content of the fo:table-header and fo:table-footer, unless omitted as specified by the
 * "table-omit-header-at-break" and "table-omit-footer-at-break" properties, shall be repeated for each normal
 * block-area generated and returned by the fo:table formatting object.
 * The inline-progression-dimension of the content-rectangle of the table is the sum of the
 * inline-progression-dimensions of the columns in the table grid. The method used to determine these
 * inline-progression-dimensions is governed by the values of the table-layout and the
 * inline-progression-dimension traits in the following manner:
 *
 * inline-progression-dimension="auto" table-layout="auto"
 *     The automatic table layout shall be used.
 *
 * inline-progression-dimension="auto" table-layout="fixed"
 *     The automatic table layout shall be used.
 *
 * inline-progression-dimension=<length> or <percentage> table-layout="auto"
 *     The automatic table layout shall be used.
 *
 * inline-progression-dimension=<length> or <percentage> table-layout="fixed"
 *     The fixed table layout shall be used.
 *
 * The automatic table layout and fixed table layout is defined in 17.5.2 of the CSS2 specification.
 * @see http://www.w3.org/TR/REC-CSS2/tables.html#width-layout
 *
 * The method for determining the block-progression-dimension of the table is governed by the
 * block-progression-dimension trait.
 *
 * Note:
 * The CSS2 specification explicitly does not specify what the behavior should be if there is a mismatch
 * between an explicitly specified table block-progression-dimension and the block-progression-dimensions
 * of the content.
 *
 * Note:
 * The use of the "proportional-column-width()" function is only permitted when the fixed table layout is used.
 * If the use of proportional column widths are desired on a table of an unknown explicit width, the
 * inline-progression-dimension cannot be specified to be "auto". Instead, the width must be specified as a
 * percentage. For example, setting table-layout="fixed" and inline-progression-dimension="100%" would allow
 * proportional column widths while simultaneously creating a table as wide as possible in the current context.
 *
 * Note:
 * The result of using a percentage for the width may be unpredictable, especially when using the automatic
 * table layout.
 *
 * It is an error if two or more table-cells overlap, for example because two or more table-cells attempt to
 * span rows or columns into the same cell position within the table grid. An implementation may recover from
 * this error by repositioning the table-cells so that all of the content is shown.
 *
 * Table-cells must each be entirely contained both horizontally and vertically in a single table-body,
 * table-header or table-footer. It is therefore an error if table-cells attempt to span too far. This might
 * for example happen in a table whose table-layout is fixed by having a number-rows-spanned or
 * number-columns-spanned value larger than the number of available rows or columns in the spanned direction.
 * An implementation may recover by behaving as if the table-cell spanned only as many rows or columns as are
 * actually available.
 *
 * Contents:
 * (table-column*,table-header?,table-footer?,table-body+)
 * @see https://www.w3.org/TR/xsl11/#fo_table
 */
class Table extends Tag
{
    use BasicAuralConformance;
    use BasicVisualConformance;
    use ValidateTable;
}
