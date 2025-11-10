<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Xsl\NumberType;

/**
 * Validates FontSizeAdjust property.
 *
 * `<number>`
 *     Specifies the aspect value. The number refers to the aspect value of the first choice font. The scaling factor for available fonts is computed according to the following formula:
 *     - y(a/a') = c
 *
 *     where:
 *     - y="font-size" of first-choice font
 *     - a = aspect value of first-choice font
 *     - a' = aspect value of available font
 *     - c="font-size" to apply to available font
 *
 * @see https://www.w3.org/TR/xsl11/#font-size-adjust
 */
class FontSizeAdjustType extends Type implements Validator
{
    /**
     * Do not preserve the font's x-height.
     */
    public const NONE = 'none';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new NumberType(),
            new EnumValidator([
                self::NONE,
                self::INHERIT,
            ])
        ));
    }
}
