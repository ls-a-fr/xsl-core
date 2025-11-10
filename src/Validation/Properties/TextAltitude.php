<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\TextAltitudeType;

/**
 * XSL Definition:
 * - Value:  use-font-metrics | `<length>` | `<percentage>` | inherit
 * - Initial:  use-font-metrics
 * - Inherited:  no
 * - Percentages:  refer to font's em-height
 * - Media:  visual
 *
 * Specifies the "height" to be used for the ascent above the dominant baseline.
 *
 * @link https://www.w3.org/TR/xsl11/#text-altitude
 */
class TextAltitude extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('text-altitude', TextAltitudeType::class);
    }

    public function getDefaultValue(): string
    {
        return TextAltitudeType::USE_FONT_METRICS;
    }
}
