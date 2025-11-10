<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tags\List;

use Lsa\Xsl\Core\Traits\BasicAuralConformance;
use Lsa\Xsl\Core\Traits\BasicVisualConformance;
use Lsa\Xsl\Core\Validation\Tags\ListBlock as ValidateListBlock;
use Lsa\Xsl\Core\Xml\Tag;

/**
 * The fo:list-block flow object is used to format a list.
 *
 * Areas:
 * The fo:list-block formatting object generates one or more normal block-areas. The fo:list-block returns
 * these areas, any page-level-out-of-line areas, and any reference-level-out-of-line areas returned by the
 * children of the fo:list-block.
 *
 * Constraints:
 * No area may have more than one normal child area returned by the same fo:list-block formatting object.
 * The children of each normal area returned by an fo:list-block formatting object must be normal block-areas
 * returned by the children of the fo:list-block, must be properly stacked, and must be properly ordered.
 *
 * Contents:
 * (list-item+)
 *
 * In addition this formatting object may have a sequence of zero or more fo:markers as its initial children.
 *
 * @see https://www.w3.org/TR/xsl11/#fo_list-block
 */
class ListBlock extends Tag
{
    use BasicAuralConformance;
    use BasicVisualConformance;
    use ValidateListBlock;
}
