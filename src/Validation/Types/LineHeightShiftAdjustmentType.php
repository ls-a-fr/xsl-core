<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates LineHeightShiftAdjustment property.
 *
 * @link https://www.w3.org/TR/xsl11/#line-height-shift-adjustment
 */
class LineHeightShiftAdjustmentType extends Type implements Validator
{
    /**
     * In determining the line-height, include the adjusted top-edge and bottom-edge of any
     * characters that have a baseline-shift.
     */
    public const CONSIDER_SHIFTS = 'consider-shifts';

    /**
     * In determining the line-height, include the unshifted top-edge and bottom-edge of any
     * characters that have a baseline-shift.
     */
    public const DISREGARD_SHIFTS = 'disregard-shifts';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::CONSIDER_SHIFTS,
            self::DISREGARD_SHIFTS,
            self::INHERIT,
        ]));
    }
}
