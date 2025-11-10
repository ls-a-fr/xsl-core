<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\FontWeightType;

/**
 * CSS2 Definition:
 * - Value:  normal | bold | bolder | lighter | 100 | 200 | 300 | 400 | 500 | 600 | 700 | 800 | 900 | inherit
 * - Initial:  normal
 * - Inherited:  yes
 * - Percentages:  N/A
 * - Media:  visual
 *
 * The "font-weight" property specifies the weight of the font. Child elements inherit the computed
 * value of the weight.
 *
 * XSL modifications to the CSS definition:
 *
 * XSL incorporates the following text from CSS2 15.5.1 (http://www.w3.org/TR/REC-CSS2/fonts.html#q46) as
 * part of the property definition.
 *
 * The association of other weights within a family to the numerical weight values is intended only to
 * preserve the ordering of weights within that family. User agents must map names to values in a way
 * that preserves visual order; a face mapped to a value must not be lighter than faces mapped to lower
 * values. There is no guarantee on how a user agent will map fonts within a family to weight values.
 * However, the following heuristics tell how the assignment is done in typical cases: If the font family
 * already uses a numerical scale with nine values (as e.g., OpenType does), the font weights should be
 * mapped directly.
 *
 * If there is both a face labeled Medium and one labeled Book, Regular, Roman or Normal, then the Medium
 * is normally assigned to the '500'.
 *
 * The font labeled "Bold" will often correspond to the weight value '700'.
 *
 * If there are fewer then 9 weights in the family, the default algorithm for filling the "holes" is as
 * follows. If '500' is unassigned, it will be assigned the same font as '400'. If any of the values '600',
 * '700', '800', or '900' remains unassigned, they are assigned to the same face as the next darker
 * assigned keyword, if any, or the next lighter one otherwise. If any of '300', '200', or '100' remains
 * unassigned, it is assigned to the next lighter assigned keyword, if any, or the next darker otherwise.
 *
 * There is no guarantee that there will be a darker face for each of the 'font-weight' values; for example,
 * some fonts may have only a normal and a bold face, others may have eight different face weights.
 *
 * @link https://www.w3.org/TR/xsl11/#font-weight
 * @link http://www.w3.org/TR/REC-CSS2/fonts.html#font-styling
 */
class FontWeight extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('font-weight', FontWeightType::class);
    }

    public function getDefaultValue(): string
    {
        return FontWeightType::NORMAL;
    }
}
