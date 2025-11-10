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
 * Validates BaselineShift property.
 *
 * @see https://www.w3.org/TR/xsl11/#baseline-shift
 */
class BaselineShiftType extends Type implements Validator
{
    /**
     * There is no baseline shift; the dominant-baseline remains in its original position.
     */
    public const BASELINE = 'baseline';

    /**
     * The dominant-baseline is shifted to the default position for subscripts. The offset to this
     * position is determined using the font data for the nominal font. Because in most fonts the
     * subscript position is normally given relative to the "alphabetic" baseline, the User Agent may
     * compute the effective position for subscripts for superscripts when some other baseline is
     * dominant. The suggested computation is to subtract the difference between the position of the
     * dominant baseline and the position of the "alphabetic" baseline from the position of the
     * subscript. The resulting offset is determined by multiplying the effective subscript position
     * by the dominant baseline-table font-size. If there is no applicable font data the User Agent
     * may use heuristics to determine the offset.
     */
    public const SUB = 'sub';

    /**
     * The dominant-baseline is shifted to the default position for superscripts. The offset to this
     * position is determined using the font data for the nominal font. Because in most fonts the
     * superscript position is normally given relative to the "alphabetic" baseline, the User Agent
     * may compute the effective position for superscripts when some other baseline is dominant. The
     * suggested computation is to subtract the difference between the position of the dominant
     * baseline and the position of the "alphabetic" baseline from the position of the superscript.
     * The resulting offset is determined by multiplying the effective superscript position by the
     * dominant baseline-table font-size. If there is no applicable font data the User Agent may use
     * heuristics to determine the offset.
     */
    public const SUPER = 'super';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new PercentageType(),
            new LengthType(),
            new EnumValidator([
                self::BASELINE,
                self::SUB,
                self::SUPER,
                self::INHERIT,
            ])
        ));
    }
}
