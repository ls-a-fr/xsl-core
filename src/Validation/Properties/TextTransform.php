<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\TextTransformType;

/**
 * CSS2 Definition:
 * - Value:  none | [`<color>` || `<length>` `<length>` `<length>`? ,]* [`<color>`
 *     || `<length>` `<length>` `<length>`?] | inherit
 * - Initial:  none
 * - Inherited:  no, see prose
 * - Percentages:  N/A
 * - Media:  visual
 *
 * This property controls capitalization effects of an element's text.
 *
 * The actual transformation in each case is written language dependent. See [RFC2070] for ways to
 * find the language of an element.
 *
 * Conforming user agents may consider the value of "text-transform" to be "none" for characters
 * that are not from the ISO Latin-1 repertoire and for elements in languages for which the
 * transformation is different from that specified by the case-conversion tables of Unicode or
 * ISO 10646.
 *
 * XSL modifications to the CSS definition:
 * - There are severe internationalization issues with the use of this property. It has been retained for CSS
 *   compatibility, but its use is not recommended in XSL.
 *
 * @link https://www.w3.org/TR/xsl11/#text-transform
 * @link http://www.w3.org/TR/REC-CSS2/text.html#propdef-text-transform
 */
class TextTransform extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('text-transform', TextTransformType::class);
    }

    public function getDefaultValue(): string
    {
        return TextTransformType::NONE;
    }
}
