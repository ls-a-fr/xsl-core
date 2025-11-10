<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\ShorthandTypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\PageBreakAfterType;

/**
 * CSS2 Definition:
 * - Value: auto | always | avoid | left | right | inherit
 * - Initial: auto
 * - Inherited: no
 * - Percentages: N/A
 * - Media: visual
 * - CSS2 Reference: "page-break-after" property
 *
 * A potential page break location is typically under the influence of the parent element's 'page-break-inside'
 * property, the 'page-break-after' property of the preceding element, and the 'page-break-before' property of
 * the following element. When these properties have values other than 'auto', the values 'always', 'left', and
 * 'right' take precedence over 'avoid'. See the section on allowed page breaks for the exact rules on how these
 * properties may force or suppress a page break.
 *
 * XSL modifications to the CSS definition:
 * The CSS property shall be treated as a shorthand by XSL and maps as follows:
 *
 * `auto`:
 * - break-after = "auto"
 * - keep-with-next = "auto"
 *
 * `always`:
 * - break-after = "page"
 * - keep-with-next = "auto"
 *
 * `avoid`:
 * - break-after = "auto"
 * - keep-with-next = "always"
 *
 * `left`:
 * - break-after = "even-page"
 * - keep-with-next = "auto"
 *
 * `right`:
 * - break-after = "odd-page"
 * - keep-with-next = "auto"
 *
 * @link https://www.w3.org/TR/xsl11/#page-break-after
 * @link http://www.w3.org/TR/REC-CSS2/page.html#propdef-page-break-after
 */
class PageBreakAfter extends ShorthandTypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct(
            'page-break-after',
            PageBreakAfterType::class,
            [
                BreakAfter::class,
                KeepWithNext::class,
            ]
        );
    }

    public function getDefaultValue(): string
    {
        return PageBreakAfterType::AUTO;
    }
}
