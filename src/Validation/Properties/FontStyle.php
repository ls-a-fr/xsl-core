<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\FontStyleType;

/**
 * CSS2 Definition:
 * - Value:  normal | italic | oblique | backslant | inherit
 * - Initial:  normal
 * - Inherited:  yes
 * - Percentages:  N/A
 * - Media:  visual
 *
 * The "font-style" property requests normal (sometimes referred to as "roman" or "upright"), italic,
 * and oblique faces within a font family. Values have the following meanings.
 *
 * XSL modifications to the CSS definition:
 * - The following value type has been added for XSL: backslant
 *
 * XSL incorporates the following text from CSS2 15.5 (http://www.w3.org/TR/REC-CSS2/fonts.html#algorithm)
 * as part of the property definition, except that for XSL the information is obtained from the font
 * tables of the available fonts.
 *
 * 'italic' will be satisfied if there is either a face in the UA's font database labeled with the CSS
 * keyword 'italic' (preferred) or 'oblique'. Otherwise the values must be matched exactly or font-style
 * will fail.
 *
 * @link https://www.w3.org/TR/xsl11/#font-style
 * @link http://www.w3.org/TR/REC-CSS2/fonts.html#font-styling
 */
class FontStyle extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('font-style', FontStyleType::class);
    }

    public function getDefaultValue(): string
    {
        return FontStyleType::NORMAL;
    }
}
