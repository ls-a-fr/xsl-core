<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates AlignmentBaseline property.
 *
 * @link https://www.w3.org/TR/xsl11/#alignment-baseline
 */
class AlignmentBaselineType extends Type implements Validator
{
    /**
     * The computed value depends on the kind of object on which it is being used. For fo:character,
     * the value is the dominant-baseline of the script to which the character belongs. If the value
     * of the "script" property on the parent formatting object is other than "auto" then use the
     * baseline for that script; otherwise, use the dominant-baseline of the parent. For all other
     * objects, the value is computed as for the "baseline" value.
     */
    public const AUTO = 'auto';

    /**
     * The alignment-point of the object being aligned is aligned with the dominant-baseline of the
     * parent area.
     */
    public const BASELINE = 'baseline';

    /**
     * The alignment-point of the object being aligned is aligned with the "before-edge" baseline of
     * the parent area.
     */
    public const BEFORE_EDGE = 'before-edge';

    /**
     * The alignment-point of the object being aligned is aligned with the "text-before-edge" baseline
     * of the parent area.
     */
    public const TEXT_BEFORE_EDGE = 'text-before-edge';

    /**
     * The alignment-point of the object being aligned is aligned with the "middle" baseline of the
     * parent area.
     */
    public const MIDDLE = 'middle';

    /**
     * The alignment-point of the object being aligned is aligned with the "central" baseline of the
     * parent area.
     */
    public const CENTRAL = 'central';

    /**
     * The alignment-point of the object being aligned is aligned with the "after-edge" baseline of
     * the parent area.
     */
    public const AFTER_EDGE = 'after-edge';

    /**
     * The alignment-point of the object being aligned is aligned with the "text-after-edge" baseline
     * of the parent area.
     */
    public const TEXT_AFTER_EDGE = 'text-after-edge';

    /**
     * The alignment-point of the object being aligned is aligned with the "ideographic" baseline of
     * the parent area.
     */
    public const IDEOGRAPHIC = 'ideographic';

    /**
     * The alignment-point of the object being aligned is aligned with the "alphabetic" baseline of
     * the parent area.
     */
    public const ALPHABETIC = 'alphabetic';

    /**
     * The alignment-point of the object being aligned is aligned with the "hanging" baseline of the
     * parent area.
     */
    public const HANGING = 'hanging';

    /**
     * The alignment-point of the object being aligned is aligned with the "mathematical" baseline of
     * the parent area.
     */
    public const MATHEMATICAL = 'mathematical';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::AUTO,
            self::BASELINE,
            self::BEFORE_EDGE,
            self::TEXT_BEFORE_EDGE,
            self::MIDDLE,
            self::CENTRAL,
            self::AFTER_EDGE,
            self::TEXT_AFTER_EDGE,
            self::IDEOGRAPHIC,
            self::ALPHABETIC,
            self::HANGING,
            self::MATHEMATICAL,
            self::INHERIT,
        ]));
    }
}
