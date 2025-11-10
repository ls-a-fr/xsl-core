<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\ShorthandTypedAttribute;
use Lsa\Xsl\Core\Validation\Types\BorderType;

/**
 * CSS2 Definition: as amended by http://www.w3.org/Style/css2-updates/REC-CSS2-19980512-errata.html#x10
 * - Value: [ `<border-width>` || `<border-style>` || [ `<color>` | transparent ] ] | inherit
 * - Initial: see individual properties
 * - Inherited: no
 * - Percentages: N/A
 * - Media: visual
 *
 * A shorthand property for setting the width, style, and color of the right border of a block-area or
 * inline-area.
 *
 * @link http://www.w3.org/TR/REC-CSS2/box.html#propdef-border-right
 */
class BorderRight extends ShorthandTypedAttribute
{
    public function __construct()
    {
        parent::__construct(
            'border-right',
            BorderType::class,
            [
                BorderRightColor::class,
                BorderRightStyle::class,
                BorderRightWidth::class,
            ]
        );
    }
}
