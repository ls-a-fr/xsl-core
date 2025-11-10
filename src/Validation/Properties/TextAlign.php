<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\TextAlignType;

/**
 * CSS2 Definition: as amended by http://www.w3.org/Style/css2-updates/REC-CSS2-19980512-errata.html#x77
 * - Value:  start | center | end | justify | inside | outside | left | right | `<string>` | inherit
 * - Initial:  start
 * - Inherited:  yes
 * - Percentages:  N/A
 * - Media:  visual
 *
 * This property describes how inline content of a block is aligned.
 *
 * A block of text is a stack of line boxes. In the case of 'left', 'right' and 'center', this
 * property specifies how the inline boxes within each line box align with respect to the line
 * box's left and right sides; alignment is not with respect to the viewport. In the case of
 * 'justify', the UA may stretch the inline boxes in addition to adjusting their positions.
 * (See also 'letter-spacing' and 'word-spacing'.)
 *
 * Note:
 * The actual justification algorithm used is user agent and written language dependent.
 * Conforming user agents may interpret the value 'justify' as 'left' or 'right', depending on
 * whether the element's default writing direction is left-to-right or right-to-left, respectively.
 *
 * XSL modifications to the CSS definition:
 * - Values meanings changed
 *
 * `<string>`: Specifies a string on which content of cells in a table column will align (see the
 * section, in the CSS2 Recommendation, on horizontal alignment in a column for details and an
 * example). This value applies only if the formatting object is a descendant of a table cell. If
 * set on other formatting objects, it will be treated as "start".
 *
 * This property describes how inline content of a block is aligned. For fo:external-graphic,
 * fo:instream-foreign-object, and fo:table-and-caption it specifies the alignment of other areas
 * as described in the constraint section for these formatting objects.
 *
 * @link https://www.w3.org/TR/xsl11/#text-align
 * @link http://www.w3.org/TR/REC-CSS2/text.html#propdef-text-align
 */
class TextAlign extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('text-align', TextAlignType::class);
    }

    public function getDefaultValue(): string
    {
        return TextAlignType::START;
    }
}
