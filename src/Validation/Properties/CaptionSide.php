<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\CaptionSideType;

/**
 * CSS2 Definition:
 * - Value:  before | after | start | end | top | bottom | left | right | inherit
 * - Initial:  before
 * - Inherited:  yes
 * - Percentages:  N/A
 * - Media:  visual
 *
 * This property specifies the position of the caption box with respect to the table box.
 *
 * Captions above or below a "table" element are formatted very much as if they were a block element
 * before or after the table, except that (1) they inherit inheritable properties from the table,
 * and (2) they are not considered to be a block box for the purposes of any "compact" or "run-in"
 * element that may precede the table.
 *
 * A caption that is above or below a table box also behaves like a block box for width calculations;
 * the width is computed with respect to the width of the table box's containing block.
 *
 * For a caption that is on the left or right side of a table box, on the other hand, a value other
 * than "auto" for "width" sets the width explicitly, but "auto" tells the user agent to chose a
 * "reasonable width". This may vary between "the narrowest possible box" to "a single line", so we
 * recommend that users do not specify "auto" for left and right caption widths.
 *
 * To align caption content horizontally within the caption box, use the "text-align" property. For
 * vertical alignment of a left or right caption box with respect to the table box, use the
 * "vertical-align" property. The only meaningful values in this case are "top", "middle", and
 * "bottom". All other values are treated the same as "top".
 *
 * XSL modifications to the CSS definition:
 * Insert the following writing-mode relative values:
 * - before: Positions the caption before the table in the block-progression-direction.
 * - after: Positions the caption after the table in the block-progression-direction.
 * - start: Positions the caption before the table in the inline-progression-direction.
 * - end: Positions the caption after the table in the inline-progression-direction.
 *
 * The CSS qualifications (1) and (2) do not apply. The last three sentences in the last paragraph
 * (referencing "vertical-align") do not apply.
 *
 * @link https://www.w3.org/TR/xsl11/#caption-side
 * @link http://www.w3.org/TR/REC-CSS2/tables.html#q6
 */
class CaptionSide extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('caption-side', CaptionSideType::class);
    }

    public function getDefaultValue(): string
    {
        return CaptionSideType::BEFORE;
    }
}
