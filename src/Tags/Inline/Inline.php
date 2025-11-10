<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tags\Inline;

use Lsa\Xml\Utils\Xml\Base\TextNode;
use Lsa\Xsl\Core\Traits\BasicAuralConformance;
use Lsa\Xsl\Core\Traits\BasicVisualConformance;
use Lsa\Xsl\Core\Validation\Tags\Inline as ValidateInline;
use Lsa\Xsl\Core\Xml\Tag;

/**
 * The fo:inline formatting object is commonly used for formatting a portion of text with a background or
 * enclosing it in a border.
 *
 * Areas:
 * The fo:inline formatting object generates one or more normal inline-areas. The fo:inline returns these areas,
 * together with any normal block-areas, page-level-out-of-line areas, and reference-level-out-of-line areas
 * returned by the children of the fo:inline.
 *
 * Constraints:
 * No area may have more than one normal child area returned by the same fo:inline formatting object.
 * The children of each normal area returned by an fo:inline must satisfy the constraints specified in
 * 4.7.3 Inline-building.
 * In addition the constraints imposed by the traits derived from the properties applicable to this formatting
 * object must be satisfied. The geometric constraints are rigorously defined in 4 Area Model.
 *
 * @see https://www.w3.org/TR/xsl11/#area-inlinebuild
 * @see https://www.w3.org/TR/xsl11/#area_model
 *
 * Contents:
 * (#PCDATA|%inline;|%block;)*
 *
 * In addition this formatting object may have a sequence of zero or more fo:markers as its initial children.
 * An fo:inline that is a child of an fo:footnote may not have block-level children. An fo:inline that is a
 * descendant of an fo:leader or of the fo:inline child of an fo:footnote may not have block-level children,
 * unless it has a nearer ancestor that is an fo:inline-container.
 * @see https://www.w3.org/TR/xsl11/#fo_inline
 */
class Inline extends Tag
{
    use BasicAuralConformance;
    use BasicVisualConformance;
    use ValidateInline;

    /**
     * Inline contents
     */
    public readonly string $text;

    /**
     * Creates a new inline tag
     *
     * @param  string  $text  Inline contents
     */
    public function __construct($text = '')
    {
        $this->text = $text;
        parent::__construct();
        $this->getChildren()->add(new TextNode($text));
    }
}
