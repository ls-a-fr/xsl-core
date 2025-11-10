<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\WhiteSpaceCollapseType;

/**
 * XSL Definition:
 * - Value:  false | true | inherit
 * - Initial:  true
 * - Inherited:  yes
 * - Percentages:  N/A
 * - Media:  visual
 *
 * The "white-space-collapse" property specifies the treatment of consecutive white space during
 * area tree public construction. The overall effect of handling the linefeed-treatment property during
 * refinement and the white-space-collapse and white-space-treatment properties during area tree
 * generation is as follows: after refinement, where some white space characters may have been
 * discarded or turned into space characters, all remaining runs of two or more consecutive spaces
 * are replaced by a single space, then any remaining space immediately adjacent to a remaining
 * linefeed is also discarded.
 *
 * An implementation is free to use any algorithm to achieve an equivalent effect.
 *
 * @link https://www.w3.org/TR/xsl11/#white-space-collapse
 */
class WhiteSpaceCollapse extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('white-space-collapse', WhiteSpaceCollapseType::class);
    }

    public function getDefaultValue(): string
    {
        return WhiteSpaceCollapseType::TRUE;
    }
}
