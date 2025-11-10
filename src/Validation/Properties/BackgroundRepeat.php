<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\BackgroundRepeatType;

/**
 * CSS2 Definition:
 * - Value:  repeat | repeat-x | repeat-y | no-repeat | inherit
 * - Initial:  repeat
 * - Inherited:  no
 * - Percentages:  N/A
 * - Media:  visual
 *
 * If a background image is specified, this property specifies whether the image is repeated (tiled), and
 * how. All tiling covers the content and padding areas of a box.
 *
 * XSL modifications to the CSS definition:
 * - "Horizontal" and "vertical" are defined relative to the reference-orientation; "horizontal" is "left"
 *   to "right", and "vertical" is "top" to "bottom".
 *
 * Note:
 * Thus for a rotated area the tiling is also rotated. It is, however, independent of the writing-mode.
 *
 * @link https://www.w3.org/TR/xsl11/#background-repeat
 * @link http://www.w3.org/TR/REC-CSS2/colors.html#propdef-background-repeat
 */
class BackgroundRepeat extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('background-repeat', BackgroundRepeatType::class);
    }

    public function getDefaultValue(): string
    {
        return BackgroundRepeatType::REPEAT;
    }
}
