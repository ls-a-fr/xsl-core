<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Xsl\LengthType;
use Lsa\Xsl\Core\Validation\Types\Xsl\PercentageType;

/**
 * Validates ContentHeight property.
 *
 * @link https://www.w3.org/TR/xsl11/#content-height
 */
class ContentHeightType extends Type implements Validator
{
    /**
     * The content-height should be the intrinsic content-height.
     */
    public const AUTO = 'auto';

    /**
     * The largest scaling-factor permitted will be applied to the content so that the scaled
     * content-height is less than or equal to the height of the viewport.
     */
    public const SCALE_TO_FIT = 'scale-to-fit';

    /**
     * If the intrinsic content-height is less than or equal to the height of the viewport the
     * content-height should be the intrinsic content-height. Otherwise the largest scaling-factor
     * permitted will be applied to the content so that the scaled content-height is less than or
     * equal to the height of the viewport.
     */
    public const SCALE_DOWN_TO_FIT = 'scale-down-to-fit';

    /**
     * If the intrinsic content-height is greater than or equal to the height of the viewport the
     * content-height should be the intrinsic content-height. Otherwise the largest scaling-factor
     * permitted will be applied to the content so that the scaled content-height is less than or
     * equal to the height of the viewport.
     */
    public const SCALE_UP_TO_FIT = 'scale-up-to-fit';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new EnumValidator([
                self::AUTO,
                self::SCALE_TO_FIT,
                self::SCALE_DOWN_TO_FIT,
                self::SCALE_UP_TO_FIT,
                self::INHERIT,
            ]),
            new LengthType(),
            new PercentageType()
        ));
    }
}
