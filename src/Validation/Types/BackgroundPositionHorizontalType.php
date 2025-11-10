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
 * Validates BackgroundPositionHorizontal property.
 *
 * `<percentage>`: Specifies that a point, at the given percentage across the image from left-to-right, shall
 * be placed at a point at the given percentage across, from left-to-right, the area's padding-rectangle.
 *
 * Note:
 * For example with a value of 0%, the left-edge of the image is aligned with the left-edge of the area's
 * padding-rectangle. A value of 100% places the right-edge of the image aligned with the right-edge of the
 * padding-rectangle. With a value of 14%, a point 14% across the image is to be placed at a point 14% across
 * the padding-rectangle.
 *
 * `<length>`: Specifies that the left-edge of the image shall be placed at the specified length to the right
 * of the left-edge of the padding-rectangle.
 *
 * Note:
 * For example with a value of 2cm, the left-edge of the image is placed 2cm to the right of the left-edge of
 * the padding-rectangle.
 *
 * @link https://www.w3.org/TR/xsl11/#background-position-horizontal
 */
class BackgroundPositionHorizontalType extends Type implements Validator
{
    public const INHERIT = 'inherit';

    /**
     * Same as 0%.
     */
    public const LEFT = 'left';

    /**
     * Same as 50%.
     */
    public const CENTER = 'center';

    /**
     * Same as 100%.
     */
    public const RIGHT = 'right';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new PercentageType(),
            new LengthType(),
            new EnumValidator([
                self::LEFT,
                self::CENTER,
                self::RIGHT,
                self::INHERIT,
            ])
        ));
    }
}
