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
 * Validates FontMetrics property.
 *
 * `<length>`:
 * - Replaces the "height" value found in the font.
 *
 * @link https://www.w3.org/TR/xsl11/#text-altitude
 */
class TextAltitudeType extends Type implements Validator
{
    /**
     * Uses a value for the "height" of the font above the dominant baseline, calculated as the
     * distance between the text-before baseline and the dominant baseline, obtained from the
     * nominal font for fo:block, fo:character, and fo:leader when the leader-pattern does not
     * have the value "use-content". For fo:leader, when the leader-pattern has the value
     * "use-content", it is obtained from the nominal font of the first child.
     *
     * Conforming implementations may choose as an actual value any value in the range of
     * text-altitudes used by fonts of the same script and font-size, instead of the values from
     * the font data.
     */
    public const USE_FONT_METRICS = 'use-font-metrics';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new LengthType(),
            new PercentageType(),
            new EnumValidator([
                self::USE_FONT_METRICS,
                self::INHERIT,
            ])
        ));
    }
}
