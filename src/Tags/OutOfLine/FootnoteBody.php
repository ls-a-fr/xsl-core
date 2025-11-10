<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tags\OutOfLine;

use Lsa\Xsl\Core\Contracts\HasAuralFallback;
use Lsa\Xsl\Core\Contracts\HasVisualFallback;
use Lsa\Xsl\Core\Tags\Block\Block;
use Lsa\Xsl\Core\Tags\Layout\Root;
use Lsa\Xsl\Core\Traits\ExtendedAuralConformance;
use Lsa\Xsl\Core\Traits\ExtendedVisualConformance;
use Lsa\Xsl\Core\Validation\Tags\FootnoteBody as ValidateFootnoteBody;
use Lsa\Xsl\Core\Xml\Tag;

/**
 * The fo:footnote-body is used to generate the footnote content.
 *
 * Areas:
 * The fo:footnote-body generates and returns one or more block-level areas with area-class "xsl-footnote".
 *
 * Constraints:
 * The fo:footnote-body is only permitted as a child of an fo:footnote.
 * No area may have more than one child block-area returned by the same fo:footnote-body formatting object.
 * Areas with area-class "xsl-footnote" must be properly ordered within the area tree relative to other areas
 * with the same area-class.
 *
 * Contents:
 * (%block;)+
 *
 * @see https://www.w3.org/TR/xsl11/#fo_footnote-body
 */
class FootnoteBody extends Tag implements HasAuralFallback, HasVisualFallback
{
    use ExtendedAuralConformance;
    use ExtendedVisualConformance;
    use ValidateFootnoteBody;

    public function getVisualFallback(Root $root): ?Tag
    {
        return $this->fallback();
    }

    public function getAuralFallback(Root $root): ?Tag
    {
        return $this->fallback();
    }

    /**
     * Common fallback management
     *
     * @return Tag Block tag with every child inside
     */
    private function fallback(): Tag
    {
        // Fallback: place inline.
        $block = new Block();
        $block->children($this->getChildren());

        return $block;
    }
}
