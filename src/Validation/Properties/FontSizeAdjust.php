<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\FontSizeAdjustType;

/**
 * CSS2 Definition:
 * - Value:  `<number>` | none | inherit
 * - Initial:  none
 * - Inherited:  yes
 * - Percentages:  N/A
 * - Media:  visual
 *
 * In bicameral scripts, the subjective apparent size and legibility of a font are less dependent on
 * their 'font-size' value than on the value of their 'x-height', or, more usefully, on the ratio of
 * these two values, called the aspect value (x-height divided by font size). The higher the aspect
 * value, the more likely it is that a font at smaller sizes will be legible. Inversely, faces with a
 * lower aspect value will become illegible more rapidly below a given threshold size than faces with
 * a higher aspect value. Straightforward font substitution that relies on font size alone may lead to
 * illegible characters.
 *
 * For example, the popular font Verdana has an aspect value of 0.58; when Verdana's font size 100
 * units, its x-height is 58 units. For comparison, Times New Roman has an aspect value of 0.46.
 * Verdana will therefore tend to remain legible at smaller sizes than Times New Roman. Conversely,
 * Verdana will often look 'too big' if substituted for Times New Roman at a chosen size.
 *
 * This property allows authors to specify an aspect value for an element that will preserve the
 * x-height of the first choice font in the substitute font. Values have the following meanings.
 *
 * This property allows authors to specify an aspect value for an element that will preserve the
 * x-height of the first choice font in the substitute font.
 *
 * Font size adjustments take place when computing the actual value of "font-size". Since inheritance
 * is based on the computed value, child elements will inherit unadjusted values.
 *
 * @link https://www.w3.org/TR/xsl11/#font-size-adjust
 * @link http://www.w3.org/TR/REC-CSS2/fonts.html#font-size-props
 */
class FontSizeAdjust extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('font-size-adjust', FontSizeAdjustType::class);
    }

    public function getDefaultValue(): string
    {
        return FontSizeAdjustType::NONE;
    }
}
