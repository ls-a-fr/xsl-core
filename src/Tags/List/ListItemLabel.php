<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tags\List;

use Lsa\Xsl\Core\Contracts\HasVisualFallback;
use Lsa\Xsl\Core\Tags\Block\Block;
use Lsa\Xsl\Core\Tags\Layout\Root;
use Lsa\Xsl\Core\Traits\BasicAuralConformance;
use Lsa\Xsl\Core\Traits\ExtendedVisualConformance;
use Lsa\Xsl\Core\Validation\Tags\ListItemLabel as ValidateListItemLabel;
use Lsa\Xsl\Core\Xml\Tag;

/**
 * The fo:list-item-label formatting object contains the content of the label of a list-item, typically used
 * to either enumerate, identify, or adorn the list-item's body.
 *
 * Areas:
 * The fo:list-item-label formatting object does not generate any areas. The fo:list-item-label formatting
 * object returns the sequence of areas created by concatenating the sequences of areas returned by each of
 * the children of the fo:list-item-label.
 *
 * Constraints:
 * The order of concatenation of the sequences of areas returned by the children of the fo:list-item-label is
 * the same order as the children are ordered under the fo:list-item-label.
 *
 * Contents:
 * (%block;)+
 *
 * In addition this formatting object may have a sequence of zero or more fo:markers as its initial children.
 *
 * @see https://www.w3.org/TR/xsl11/#fo_list-item-label
 */
class ListItemLabel extends Tag implements HasVisualFallback
{
    use BasicAuralConformance;
    use ExtendedVisualConformance;
    use ValidateListItemLabel;

    public function getVisualFallback(Root $root): ?Tag
    {
        // Fallback: labels that break across multiple lines are treated as separate blocks before list-item-body.
        $xml = $this->asXmlElement()->asXML();
        if ($xml === false || trim($xml) === '') {
            return null;
        }

        $text = strip_tags($xml);
        $text = preg_replace('/\s+[\n\r]\s+/', "\n", $text);
        if ($text === null) {
            return null;
        }
        $parts = explode("\n", $text);

        $parent = $this->parent();
        if ($parent === null) {
            return null;
        }

        /**
         * A list-item-label must have a list-item-body
         *
         * @var \Lsa\Xsl\Core\Tags\List\ListItemBody
         */
        $listItemBody = $parent->getChildren()->get(ListItemBody::class)->first();

        foreach ($parts as $part) {
            $listItemBody->child((new Block())->content($part));
        }

        return null;
    }
}
