<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tags\Layout;

use Lsa\Xsl\Core\Traits\BasicAuralConformance;
use Lsa\Xsl\Core\Traits\BasicVisualConformance;
use Lsa\Xsl\Core\Validation\Tags\Root as ValidateRoot;
use Lsa\Xsl\Core\Xml\Tag;

/**
 * This is the top node of the formatting object tree. It holds an fo:layout-master-set formatting object
 * (which holds all masters used in the document), an optional fo:declarations, an optional fo:bookmark-tree,
 * and one or more fo:page-sequence or fo:page-sequence-wrapper objects. Each fo:page-sequence represents a
 * sequence of pages that result from formatting the content children of the fo:page-sequence. An
 * fo:page-sequence-wrapper can also occur as the child of fo:root. An fo:page-sequence-wrapper can contain
 * zero or more fo:page-sequence objects or fo:page-sequence-wrappers. The fo:page-sequence-wrapper is used
 * to specify inherited properties for the fo:page-sequence objects it wraps; it has no additional formatting
 * semantics.
 *
 * Note:
 * A document can contain multiple fo:page-sequences. For example, each chapter of a document could be a
 * separate fo:page-sequence; this would allow chapter-specific content, such as the chapter title, to be
 * placed within a header or footer.
 *
 * Areas:
 * Page-viewport-areas are returned by the fo:page-sequence children of the fo:root formatting object. The
 * fo:root does not generate any areas.
 *
 * Constraints:
 * The children of the root of the area tree consist solely of, and totally of, the page-viewport-areas
 * returned by the fo:page-sequence children of the fo:root. The set of all areas returned by the
 * fo:page-sequence children is properly ordered. (See Section 4.7.1 General Ordering Constraints.)
 *
 * @see https://www.w3.org/TR/xsl11/#area-genorder
 *
 * Contents:
 * (layout-master-set,declarations?,bookmark-tree?,(page-sequence|page-sequence-wrapper)+)
 *
 * It is an error if there is not at least one fo:page-sequence descendant of fo:root.
 * @see https://www.w3.org/TR/xsl11/#fo_root
 */
class Root extends Tag
{
    use BasicAuralConformance;
    use BasicVisualConformance;
    use ValidateRoot;
}
