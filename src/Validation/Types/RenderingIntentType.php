<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates RenderingIntent property.
 *
 * @link https://www.w3.org/TR/xsl11/#rendering-intent
 */
class RenderingIntentType extends Type implements Validator
{
    /**
     * This is the default behavior. The User Agent determines the best intent based on the content
     * type. For image content containing an embedded profile, it shall be assumed that the intent
     * specified within the profile is the desired intent. Otherwise, the user agent shall use the
     * current profile and force the intent, overriding any intent that might be stored in the profile
     * itself.
     */
    public const AUTO = 'auto';

    /**
     * This method, often the preferred choice for images, preserves the relationship between colors. It
     * attempts to maintain relative color values among the pixels as they are mapped to the target
     * device gamut. Sometimes pixel values that were originally within the target device gamut are
     * changed in order to avoid hue shifts and discontinuities and to preserve as much as possible the
     * overall appearance of the scene.
     */
    public const PERCEPTUAL = 'perceptual';

    /**
     * Leaves colors that fall inside the gamut unchanged. This method usually converts out of gamut
     * colors to colors that have the same lightness but fall just inside the gamut.
     */
    public const RELATIVE_COLORIMETRIC = 'relative-colorimetric';

    /**
     * Preserves the relative saturation (chroma) values of the original pixels. Out of gamut colors
     * are converted to colors that have the same saturation but fall just inside the gamut.
     */
    public const SATURATION = 'saturation';

    /**
     * Disables white point matching when converting colors. This option is generally not recommended.
     */
    public const ABSOLUTE_COLORIMETRIC = 'absolute-colorimetric';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::AUTO,
            self::PERCEPTUAL,
            self::RELATIVE_COLORIMETRIC,
            self::SATURATION,
            self::ABSOLUTE_COLORIMETRIC,
            self::INHERIT,
        ]));
    }
}
