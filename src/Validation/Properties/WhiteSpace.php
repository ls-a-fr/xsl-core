<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\ShorthandTypedAttribute;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\WhiteSpaceType;

/**
 * CSS2 Definition:
 * - Value: normal | pre | nowrap | inherit
 * - Initial: normal
 * - Inherited: yes
 * - Percentages: N/A
 * - Media: visual
 *
 * This property declares how whitespace inside the element is handled. Values have the following meanings:
 *
 * `normal`:
 * - This value directs user agents to collapse sequences of whitespace, and break lines as necessary to fill
 *   line boxes. Additional line breaks may be created by occurrences of "\A" in generated content (e.g., for
 *   the BR element in HTML).
 *
 * `pre`:
 * - This value prevents user agents from collapsing sequences of whitespace. Lines are only broken at
 *   newlines in the source, or at occurrences of "\A" in generated content.
 *
 * `nowrap`:
 * - This value collapses whitespace as for 'normal', but suppresses line breaks within text except for those
 *   created by "\A" in generated content (e.g., for the BR element in HTML).
 *
 * Conforming user agents may ignore the 'white-space' property in author and user style sheets but must specify
 * a value for it in the default style sheet.
 *
 * XSL modifications to the CSS definition:
 * - XSL splits control of white space collapsing, space and linefeed handling, and wrapping into separate
 *   properties.
 *
 * - The CSS property shall be treated as a shorthand by XSL and maps as follows:
 *
 * `normal`:
 * - linefeed-treatment="treat-as-space"
 * - white-space-collapse="true"
 * - white-space-treatment="ignore-if-surrounding-linefeed"
 * - wrap-option="wrap"
 *
 * `pre`:
 * - linefeed-treatment="preserve"
 * - white-space-collapse="false"
 * - white-space-treatment="preserve"
 * - wrap-option="no-wrap"
 *
 * `nowrap`:
 * - linefeed-treatment="treat-as-space"
 * - white-space-collapse="true"
 * - white-space-treatment="ignore-if-surrounding-linefeed"
 * - wrap-option="no-wrap"
 *
 * @link https://www.w3.org/TR/xsl11/#white-space
 * @link http://www.w3.org/TR/REC-CSS2/text.html#propdef-white-space
 */
class WhiteSpace extends ShorthandTypedAttribute
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct(
            'white-space',
            WhiteSpaceType::class,
            [
                LinefeedTreatment::class,
                WhiteSpaceCollapse::class,
                WhiteSpaceTreatment::class,
                WrapOption::class,
            ]
        );
    }
}
