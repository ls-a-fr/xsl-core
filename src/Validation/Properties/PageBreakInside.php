<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\ShorthandTypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\PageBreakInsideType;

/**
 * CSS2 Definition:
 * Value: avoid | auto | inherit
 * Initial: auto
 * Inherited: yes
 * Percentages: N/A
 * Media: visual
 *
 * CSS2 Reference: "page-break-inside" property
 *
 * Note: The CSS definition for page-break-inside was shared with the definitions of page-break-before and
 * page-break-after. The text here has been edited to include only the value choices valid for page-break-inside
 * and to remove the before/after/inside triplet.
 *
 * A potential page break location is typically under the influence of the parent element's 'page-break-inside'
 * property, the 'page-break-after' property of the preceding element, and the 'page-break-before' property of
 * the following element. When these properties have values other than 'auto', values 'always', 'left', and
 * 'right' take precedence over 'avoid'. See the section on allowed page breaks for the exact rules on how these
 * properties may force or suppress a page break.
 *
 * XSL modifications to the CSS definition:
 * XSL treats this as a shorthand and maps it as follows:
 *
 * `auto`:
 * - keep-together = "auto"
 *
 * `avoid`:
 * - keep-together = "always"
 *
 * @link https://www.w3.org/TR/xsl11/#page-break-inside
 * @link http://www.w3.org/TR/REC-CSS2/page.html#propdef-page-break-inside
 */
class PageBreakInside extends ShorthandTypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct(
            'page-break-inside',
            PageBreakInsideType::class,
            [
                KeepTogether::class,
            ]
        );
    }

    public function getDefaultValue(): string
    {
        return PageBreakInsideType::AUTO;
    }
}
