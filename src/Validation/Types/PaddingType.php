<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\CompoundValidator;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Css\PaddingWidthType;

/**
 * CSS2 Reference: "padding" property
 *
 * A shorthand property for setting padding-top, padding-bottom, padding-left, and padding-right
 * of a block-area or inline-area.
 * If there is only one value, it applies to all sides. If there are two values, the top and
 * bottom paddings are set to the first value and the right and left paddings are set to the
 * second. If there are three values, the top is set to the first value, the left and right are
 * set to the second, and the bottom is set to the third. If there are four values, they apply
 * to the top, right, bottom, and left, respectively.
 *
 * The surface color or image of the padding area is specified via the "background" property.
 *
 * @see https://www.w3.org/TR/xsl11/#padding
 */
class PaddingType extends Type implements Validator
{
    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            (new CompoundValidator(
                min: 1,
                max: 4,
                validator: new PaddingWidthType()
            ))->separator(' ')->shouldTrim(),
            new EnumValidator([
                self::INHERIT,
            ])
        ));
    }
}
