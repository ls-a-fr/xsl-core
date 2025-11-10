<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates ScalingMethod property.
 *
 * @link https://www.w3.org/TR/xsl11/#scaling-method
 */
class ScalingMethodType extends Type implements Validator
{
    /**
     * The User Agent is free to choose either resampling, integer scaling, or any other scaling method.
     */
    public const AUTO = 'auto';

    /**
     * The User Agent should scale the image such that each pixel in the original image is scaled to
     * the nearest integer number of device-pixels that yields an image less-then-or-equal-to the image
     * size derived from the content-height, content-width, and scaling properties.
     */
    public const INTEGER_PIXELS = 'integer-pixels';

    /**
     * The User Agent should resample the supplied image to provide an image that fills the size derived
     * from the content-height, content-width, and scaling properties. The user agent may use any
     * sampling method.
     */
    public const RESAMPLE_ANY_METHOD = 'resample-any-method';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::AUTO,
            self::INTEGER_PIXELS,
            self::RESAMPLE_ANY_METHOD,
            self::INHERIT,
        ]));
    }
}
