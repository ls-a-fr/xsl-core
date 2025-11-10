<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\ShorthandTypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\SizeType;

/**
 * CSS2 Definition:
 * Value: `<length>{1,2}` | auto | landscape | portrait | inherit
 * Initial: auto
 * Inherited: N/A [XSL:no, is optional]
 * Percentages: N/A
 * Media: visual
 *
 * This property specifies the size and orientation of a page box.
 * The size of a page box may either be "absolute" (fixed size) or "relative" (scalable, i.e., fitting available
 * sheet sizes). Relative page boxes allow user agents to scale a document and make optimal use of the target
 * size.
 *
 * [The first] Three values for the 'size' property create a relative page box:
 * `auto`:
 * - The page box will be set to the size and orientation of the target sheet.
 *
 * `landscape`
 * - Overrides the target's orientation. The page box is the same size as the target, and the longer sides are
 * - horizontal.
 *
 * `portrait`
 * - Overrides the target's orientation. The page box is the same size as the target, and the shorter sides
 * - are horizontal.
 *
 * `<length>`
 * - Length values for the "size" property create an absolute page box. If only one length value is specified,
 * - it sets both the width and height of the page box (i.e., the box is a square). Since the page box is the
 * - initial containing block, percentage values are not allowed for the "size" property.
 * User agents may allow users to control the transfer of the page box to the sheet (e.g., rotating an absolute
 * page box that's being printed).
 * - Rendering page boxes that do not fit a target sheet
 * - If a page box does not fit the target sheet dimensions, the user agent may choose to:
 *     1) Rotate the page box 90 degrees if this will make the page box fit ;
 *     2) Scale the page to fit the target.
 *   The user agent should consult the user before performing these operations.
 * - Positioning the page box on the sheet
 *     When the page box is smaller than the target size, the user agent is free to place the page box anywhere
 *     on the sheet. However, it is recommended that the page box be centered on the sheet since this will align
 *     double-sided pages and avoid accidental loss of information that is printed near the edge of the sheet.
 *
 * XSL modifications to the CSS definition:
 * This is treated as a CSS shorthand property that is mapped to XSL's "page-height" and "page-width" properties.
 *
 * @link https://www.w3.org/TR/xsl11/#size
 * @link http://www.w3.org/TR/REC-CSS2/page.html#propdef-size
 */
class Size extends ShorthandTypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct(
            'size',
            SizeType::class,
            [
                PageHeight::class,
                PageWidth::class,
            ]
        );
    }

    public function getDefaultValue(): string
    {
        return SizeType::AUTO;
    }
}
