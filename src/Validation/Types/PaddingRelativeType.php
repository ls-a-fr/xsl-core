<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Css\PaddingWidthType;
use Lsa\Xsl\Core\Validation\Types\Xsl\LengthConditionalType;

/**
 * Validates PaddingAfter, PaddingBefore, PaddingEnd and PaddingStart properties.
 *
 * `<length-conditional>`:
 *   A compound value specifying the width and any conditionality of the padding for the before-edge.
 *   The .length component is a <length>. It may not be negative. The .conditionality component may be
 *   set to "discard" or "retain" to control if the padding should be 0 or retained if its associated
 *   edge is a leading-edge in a reference-area for areas generated from this formatting object that
 *   have an is-first value of "false". See 4.3 Spaces and Conditionality for further details. The initial
 *   value of the .conditionality component is "discard".
 *
 * @link https://www.w3.org/TR/xsl11/#padding-after
 * @link https://www.w3.org/TR/xsl11/#padding-before
 * @link https://www.w3.org/TR/xsl11/#padding-end
 * @link https://www.w3.org/TR/xsl11/#padding-start
 * @link https://www.w3.org/TR/xsl11/#spacecond
 */
class PaddingRelativeType extends Type implements Validator
{
    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new PaddingWidthType(),
            new LengthConditionalType(),
            new EnumValidator([
                self::INHERIT,
            ])
        ));
    }
}
