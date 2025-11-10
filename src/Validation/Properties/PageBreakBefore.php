<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\ShorthandTypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\PageBreakBeforeType;

/**
 * CSS2 Definition:
 * - Value: auto | always | avoid | left | right | inherit
 * - Initial: auto
 * - Inherited: no
 * - Percentages: N/A
 * - Media: visual
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
 * - break-before = "auto"
 * - keep-with-previous = "auto"
 *
 * `always`:
 * - break-before = "page"
 * - keep-with-previous = "auto"
 *
 * `avoid`:
 * - break-before = "auto"
 * - keep-with-previous = "always"
 *
 * `left`:
 * - break-before = "even-page"
 * - keep-with-previous = "auto"
 *
 * `right`:
 * - break-before = "odd-page"
 * - keep-with-previous = "auto"
 *
 * @link https://www.w3.org/TR/xsl11/#page-break-before
 * @link http://www.w3.org/TR/REC-CSS2/page.html#propdef-page-break-before
 */
class PageBreakBefore extends ShorthandTypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct(
            'page-break-before',
            PageBreakBeforeType::class,
            [
                BreakBefore::class,
                KeepWithPrevious::class,
            ]
        );
    }

    public function getDefaultValue(): string
    {
        return PageBreakBeforeType::AUTO;
    }
}
