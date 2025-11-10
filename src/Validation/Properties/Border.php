<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\ShorthandTypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Properties\Virtual\BorderAfter;
use Lsa\Xsl\Core\Validation\Properties\Virtual\BorderBefore;
use Lsa\Xsl\Core\Validation\Properties\Virtual\BorderEnd;
use Lsa\Xsl\Core\Validation\Properties\Virtual\BorderStart;
use Lsa\Xsl\Core\Validation\Types\BorderType;

/**
 * CSS2 Definition:
 * - Value: [ `<border-width>` || `<border-style>` || [ `<color>` | transparent ] ] | inherit
 * - Initial:   see individual properties
 * - Inherited: no
 * - Percentages:   N/A
 * - Media: visual
 *
 * The "border" property is a shorthand property for setting the same width, color, and style for all four
 * borders, top, bottom, left, and right, of a box. Unlike the shorthand "margin" and "padding" properties,
 * the "border" property cannot set different values on the four borders. To do so, one or more of the other
 * border properties must be used.
 *
 * XSL modifications to the CSS definition:
 * - Refer to 5.3.1 Border and Padding Properties for information on the precedence order of properties.
 *
 * @link https://www.w3.org/TR/xsl11/#border
 * @link http://www.w3.org/TR/REC-CSS2/box.html#propdef-border
 * @link https://www.w3.org/TR/xsl11/#refine-border-padding
 */
class Border extends ShorthandTypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct(
            'border',
            BorderType::class,
            [
                BorderAfter::class,
                BorderBefore::class,
                BorderBottom::class,
                BorderEnd::class,
                BorderLeft::class,
                BorderRight::class,
                BorderStart::class,
                BorderTop::class,
            ]
        );
    }

    public function getDefaultValue(): string
    {
        return implode(' ', [
            (new BorderWidth())->getDefaultValue(),
            (new BorderStyle())->getDefaultValue(),
            (new Color())->getDefaultValue(),
        ]);
    }
}
