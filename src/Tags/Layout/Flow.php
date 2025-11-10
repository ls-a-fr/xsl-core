<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tags\Layout;

use Lsa\Xsl\Core\Traits\BasicAuralConformance;
use Lsa\Xsl\Core\Traits\BasicVisualConformance;
use Lsa\Xsl\Core\Validation\Tags\Flow as ValidateFlow;
use Lsa\Xsl\Core\Xml\Tag;

/**
 * The content of the fo:flow formatting object is a sequence of flow objects that provides the flowing text
 * content that is distributed into pages.
 *
 * Areas:
 * The fo:flow formatting object does not generate any areas. The fo:flow formatting object returns a sequence
 * of areas created by concatenating the sequences of areas returned by each of the children of the fo:flow.
 * The order of concatenation is the same order as the children are ordered under the fo:flow.
 *
 * Constraints:
 * The flow-map determines the assignment of the content of the fo:flow to a region.
 *
 * Contents:
 * (%block;)+
 *
 * @see https://www.w3.org/TR/xsl11/#fo_flow
 */
class Flow extends Tag
{
    use BasicAuralConformance;
    use BasicVisualConformance;
    use ValidateFlow;
}
