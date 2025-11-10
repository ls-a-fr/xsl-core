<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates ReferenceOrientation property.
 *
 * @link https://www.w3.org/TR/xsl11/#reference-orientation
 */
class ReferenceOrientationType extends Type implements Validator
{
    public const INHERIT = 'inherit';

    /**
     * The reference-orientation of this reference-area has the same reference-orientation as the
     * containing reference-area.
     */
    public const ANGLE_0 = '0';

    /**
     * The reference-orientation of this reference-area is rotated 90 degrees counter-clockwise from
     * the reference-orientation of the containing reference-area.
     */
    public const ANGLE_90 = '90';

    /**
     * The reference-orientation of this reference-area is rotated 180 degrees counter-clockwise from
     * the reference-orientation of the containing reference-area.
     */
    public const ANGLE_180 = '180';

    /**
     * The reference-orientation of this reference-area is rotated 270 degrees counter-clockwise from
     * the reference-orientation of the containing reference-area.
     */
    public const ANGLE_270 = '270';

    /**
     * The reference-orientation of this reference-area is rotated 270 degrees counter-clockwise from
     * the reference-orientation of the containing reference-area.
     * Note: This is equivalent to specifying "270".
     */
    public const ANGLE_MINUS_90 = '-90';

    /**
     * The reference-orientation of this reference-area is rotated 180 degrees counter-clockwise from
     * the reference-orientation of the containing reference-area.
     * Note: This is equivalent to specifying "180".
     */
    public const ANGLE_MINUS_180 = '-180';

    /**
     * The reference-orientation of this reference-area is rotated 90 degrees counter-clockwise from
     * the reference-orientation of the containing reference-area.
     * Note: This is equivalent to specifying "90".
     */
    public const ANGLE_MINUS_270 = '-270';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::INHERIT,
            self::ANGLE_0,
            self::ANGLE_90,
            self::ANGLE_180,
            self::ANGLE_270,
            self::ANGLE_MINUS_90,
            self::ANGLE_MINUS_180,
            self::ANGLE_MINUS_270,
        ]));
    }
}
