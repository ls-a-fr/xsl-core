<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\RenderingIntentType;

/**
 * XSL Definition:
 * - Value:  auto | perceptual | relative-colorimetric | saturation | absolute-colorimetric | inherit
 * - Initial:  auto
 * - Inherited:  no
 * - Percentages:  N/A
 * - Media:  visual
 *
 * "rendering-intent" permits the specification of a color-profile rendering-intent other than the
 * default. "rendering-intent" is applicable primarily to color-profiles corresponding to CMYK color
 * spaces. The different options cause different methods to be used for translating colors to the
 * color gamut of the target rendering device.
 *
 * @link https://www.w3.org/TR/xsl11/#rendering-intent
 */
class RenderingIntent extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('rendering-intent', RenderingIntentType::class);
    }

    public function getDefaultValue(): string
    {
        return RenderingIntentType::AUTO;
    }
}
