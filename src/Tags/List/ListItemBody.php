<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tags\List;

use Lsa\Xsl\Core\Traits\BasicAuralConformance;
use Lsa\Xsl\Core\Traits\BasicVisualConformance;
use Lsa\Xsl\Core\Validation\Tags\ListItemBody as ValidateListItemBody;
use Lsa\Xsl\Core\Xml\Tag;

/**
 * The fo:list-item-body formatting object contains the content of the body of a list-item.
 *
 * Areas:
 * The fo:list-item-body formatting object does not generate any areas. The fo:list-item-body formatting
 * object returns the sequence of areas created by concatenating the sequences of areas returned by each of
 * the children of the fo:list-item-body.
 *
 * Constraints:
 * The order of concatenation of the sequences of areas returned by the children of the fo:list-item-body is
 * the same order as the children are ordered under the fo:list-item-body.
 *
 * Contents:
 * (%block;)+
 *
 * In addition this formatting object may have a sequence of zero or more fo:markers as its initial children.
 *
 * @see https://www.w3.org/TR/xsl11/#fo_list-item-body
 */
class ListItemBody extends Tag
{
    use BasicAuralConformance;
    use BasicVisualConformance;
    use ValidateListItemBody;
}
