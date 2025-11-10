<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\FontSizeType;

/**
 * CSS2 Definition: as amended by http://www.w3.org/Style/css2-updates/REC-CSS2-19980512-errata.html#x74
 * Value:  `<absolute-size>` | `<relative-size>` | `<length>` | `<percentage>` | inherit
 * Initial:  medium
 * Inherited:  yes, the computed value is inherited
 * Percentages:  refer to parent element's font size
 * Media:  visual

 * This property describes the size of the font when set solid. The font size corresponds to the em
 * square, a concept used in typography. Note that certain glyphs may bleed outside their em squares.
 *
 * The actual value of this property may differ from the computed value due a numerical value on
 * 'font-size-adjust' and the unavailability of certain font sizes.
 *
 * Child elements inherit the computed 'font-size' value (otherwise, the effect of 'font-size-adjust'
 * would compound).
 *
 * An `<absolute-size/>` keyword refers to an entry in a table of font sizes computed and kept by the
 * user agent. Possible values are: [ xx-small | x-small | small | medium | large | x-large | xx-large ]
 * On a computer screen a scaling factor of 1.2 is suggested between adjacent indexes; if the "medium"
 * font is 12pt, the "large" font could be 14.4pt. Different media may need different scaling factors.
 * Also, the user agent should take the quality and availability of fonts into account when computing
 * the table. The table may be different from one font family to another. Note. In CSS1, the suggested
 * scaling factor between adjacent indexes was 1.5 which user experience proved to be too large.
 *
 * A `<relative-size/>` keyword is interpreted relative to the table of font sizes and the font size
 * of the parent element. Possible values are: [ larger | smaller ] For example, if the parent element
 * has a font size of "medium", a value of "larger" will make the font size of the current element be
 * "large". If the parent element's size is not close to a table entry, the user agent is free to
 * interpolate between table entries or round off to the closest one. The user agent may have to
 * extrapolate table values if the numerical value goes beyond the keywords.
 *
 * @link https://www.w3.org/TR/xsl11/#font-size
 * @link http://www.w3.org/TR/REC-CSS2/fonts.html#propdef-font-size
 */
class FontSize extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('font-size', FontSizeType::class);
    }

    public function getDefaultValue(): string
    {
        return FontSizeType::MEDIUM;
    }
}
