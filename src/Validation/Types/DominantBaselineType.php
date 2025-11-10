<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates DominantBaseline property.
 *
 * @link https://www.w3.org/TR/xsl11/#dominant-baseline
 */
class DominantBaselineType extends Type implements Validator
{
    /**
     * If this property occurs on a block-level formatting object, then the computed value depends on the
     * value of the "script" property. There are two cases. If the value of the "script" property is "auto",
     * then, if the "writing-mode" is horizontal, then the baseline-identifier for the dominant baseline is
     * set to be "alphabetic", else if the "writing-mode" is vertical, then the baseline-identifier for the
     * dominant baseline is set to be "central". On the other hand, if the value of the "script" property is
     * anything other than "auto", then the value of the "script" property is used to select the
     * baseline-identifier for the dominant baseline. The mapping from script to baseline-identifier is taken
     * from the nominal font. The derived baseline-table is constructed using the baseline-table in the
     * nominal font that corresponds to the baseline-identifier for the dominant baseline. The baseline-table
     * font-size is changed to the value of the "font-size" property on this formatting object.
     *
     * Otherwise, if this property is not on a block-level formatting object, then the baseline-identifier for
     * the dominant baseline, the derived baseline-table, and baseline-table font-size remain the same as
     * those of the parent formatting object. If the computed "baseline-shift" value actually shifts the
     * baseline, then the baseline-table font-size is set to the value of the "font-size" property on the
     * formatting object on which the "dominant-baseline" property occurs, otherwise the baseline-table
     * font-size remains the same as that of the parent formatting object. If there is no parent formatting
     * object, the derived baseline-table is constructed as above for block-level formatting-objects.
     */
    public const AUTO = 'auto';

    /**
     * The "script" property is used to select the baseline-identifier for the dominant baseline. The
     * mapping from script to baseline-identifier is taken from the nominal font. The derived baseline-table
     * is constructed using the baseline-table in the nominal font that corresponds to the
     * baseline-identifier for the dominant baseline. The baseline-table font-size is changed to the value
     * of the "font-size" property on this formatting object.
     */
    public const USE_SCRIPT = 'use-script';

    /**
     * The dominant-baseline, the baseline-table, and the baseline-table font-size remain the same as that
     * of the parent formatting object.
     */
    public const NO_CHANGE = 'no-change';

    /**
     * The dominant-baseline and the baseline-table remain the same, but the baseline-table font-size is
     * changed to the value of the "font-size" property on this formatting object. This re-scales the
     * baseline-table for the current "font-size".
     */
    public const RESET_SIZE = 'reset-size';

    /**
     * The baseline-identifier for the dominant-baseline is set to be "ideographic". The derived
     * baseline-table is constructed using the "ideographic" baseline-table in the nominal font. The
     * baseline-table font-size is changed to the value of the "font-size" property on this formatting
     * object.
     */
    public const IDEOGRAPHIC = 'ideographic';

    /**
     * The baseline-identifier for the dominant-baseline is set to be "alphabetic". The derived
     * baseline-table is constructed using the "alphabetic" baseline-table in the nominal font. The
     * baseline-table font-size is changed to the value of the "font-size" property on this formatting
     * object.
     */
    public const ALPHABETIC = 'alphabetic';

    /**
     * The baseline-identifier for the dominant-baseline is set to be "hanging". The derived
     * baseline-table is constructed using the "hanging" baseline-table in the nominal font. The
     * baseline-table font-size is changed to the value of the "font-size" property on this formatting
     * object.
     */
    public const HANGING = 'hanging';

    /**
     * The baseline-identifier for the dominant-baseline is set to be "mathematical". The derived
     * baseline-table is constructed using the "mathematical" baseline-table in the nominal font. The
     * baseline-table font-size is changed to the value of the "font-size" property on this formatting
     * object.
     */
    public const MATHEMATICAL = 'mathematical';

    /**
     * The baseline-identifier for the dominant-baseline is set to be "central". The derived baseline-table
     * is constructed from the defined baselines in a baseline-table in the nominal font. That font
     * baseline-table is chosen using the following priority order of baseline-table names: "ideographic",
     * "alphabetic", "hanging", "mathematical". The baseline-table font-size is changed to the value of the
     * "font-size" property on this formatting object.
     */
    public const CENTRAL = 'central';

    /**
     * The baseline-identifier for the dominant-baseline is set to be "middle". The derived baseline-table
     * is constructed from the defined baselines in a baseline-table in the nominal font. That font
     * baseline-table is chosen using the following priority order of baseline-table names: "alphabetic",
     * "ideographic", "hanging", "mathematical". The baseline-table font-size is changed to the value of the
     * "font-size" property on this formatting object.
     */
    public const MIDDLE = 'middle';

    /**
     * The baseline-identifier for the dominant-baseline is set to be "text-after-edge". The derived
     * baseline-table is constructed from the defined baselines in a baseline-table in the nominal font.
     * The choice of which font baseline-table to use from the baseline-tables in the nominal font is
     * implementation defined. The baseline-table font-size is changed to the value of the "font-size"
     * property on this formatting object.
     * Note: Using the following priority order of baseline-table names: "alphabetic", "ideographic",
     * "hanging", "mathematical" is probably a reasonable strategy for determining which font baseline-table
     * to use.
     */
    public const TEXT_AFTER_EDGE = 'text-after-edge';

    /**
     * The baseline-identifier for the dominant-baseline is set to be "text-before-edge". The derived
     * baseline-table is constructed from the defined baselines in a baseline-table in the nominal font.
     * The choice of which baseline-table to use from the baseline-tables in the nominal font is
     * implementation defined. The baseline-table font-size is changed to the value of the "font-size"
     * property on this formatting object.
     *
     * Note: Using the following priority order of baseline-table names: 'alphabetic', 'ideographic',
     * 'hanging', 'mathematical' is probably a reasonable strategy for determining which font baseline-table
     * to use.
     */
    public const TEXT_BEFORE_EDGE = 'text-before-edge';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::AUTO,
            self::USE_SCRIPT,
            self::NO_CHANGE,
            self::RESET_SIZE,
            self::IDEOGRAPHIC,
            self::ALPHABETIC,
            self::HANGING,
            self::MATHEMATICAL,
            self::CENTRAL,
            self::MIDDLE,
            self::TEXT_AFTER_EDGE,
            self::TEXT_BEFORE_EDGE,
            self::INHERIT,
        ]));
    }
}
